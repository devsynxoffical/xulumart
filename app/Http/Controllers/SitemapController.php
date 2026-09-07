<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class SitemapController extends Controller
{
    /**
     * Cache key used by the sitemap. Product/Category models flush this
     * automatically whenever a record is created, updated, or deleted -
     * see the `booted()` hooks added to those models - so the sitemap
     * always reflects the current catalog without needing to regenerate
     * on every single request.
     */
    const CACHE_KEY = 'sitemap_xml';

    /**
     * Generate the public XML sitemap.
     * Only ever includes public, indexable pages - never admin,
     * authentication, cart, checkout, or account pages.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xml = Cache::remember(self::CACHE_KEY, now()->addHours(6), function () {
            return $this->buildXml();
        });

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }

    private function buildXml()
    {
        $urls = [];

        // Homepage
        $urls[] = ['loc' => route('index'), 'priority' => '1.0', 'changefreq' => 'daily'];

        // Static, always-public pages
        $staticRoutes = [
            'products'  => '0.8',
            'flashSale' => '0.7',
            'about'     => '0.5',
            'contact'   => '0.5',
        ];
        foreach ($staticRoutes as $routeName => $priority) {
            if (\Illuminate\Support\Facades\Route::has($routeName)) {
                $urls[] = ['loc' => route($routeName), 'priority' => $priority, 'changefreq' => 'weekly'];
            }
        }

        // Categories + Sub-categories (only active ones)
        Category::where('is_active', 1)->orderBy('id')->chunk(200, function ($categories) use (&$urls) {
            foreach ($categories as $category) {
                $urls[] = [
                    'loc' => route('category.products', [$category->id, Str::slug($category->title)]),
                    'priority' => $category->parent_id == 0 ? '0.7' : '0.6',
                    'changefreq' => 'weekly',
                    'lastmod' => optional($category->updated_at)->toAtomString(),
                ];
            }
        });

        // Products (only active/published ones)
        Product::where('is_active', 1)->orderBy('id')->chunk(200, function ($products) use (&$urls) {
            foreach ($products as $product) {
                $urls[] = [
                    'loc' => route('single.product', [$product->id, Str::slug($product->title)]),
                    'priority' => '0.6',
                    'changefreq' => 'weekly',
                    'lastmod' => optional($product->updated_at)->toAtomString(),
                ];
            }
        });

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        foreach ($urls as $url) {
            $xml .= "  <url>\n";
            $xml .= '    <loc>' . htmlspecialchars($url['loc'], ENT_QUOTES) . "</loc>\n";
            if (!empty($url['lastmod'])) {
                $xml .= '    <lastmod>' . $url['lastmod'] . "</lastmod>\n";
            }
            $xml .= '    <changefreq>' . $url['changefreq'] . "</changefreq>\n";
            $xml .= '    <priority>' . $url['priority'] . "</priority>\n";
            $xml .= "  </url>\n";
        }
        $xml .= '</urlset>';

        return $xml;
    }

    /**
     * Call this to force-clear the cached sitemap immediately (used by the
     * Product/Category model hooks so new/removed items show up right away
     * instead of waiting for the 6-hour cache to expire).
     */
    public static function flushCache()
    {
        Cache::forget(self::CACHE_KEY);
    }
}