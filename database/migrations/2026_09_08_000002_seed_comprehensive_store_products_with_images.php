<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;

class SeedComprehensiveStoreProductsWithImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $productsData = [
            // 1. MENS
            [
                'cat' => 'MENS', 'sub' => 'Shirt',
                'title' => 'Men\'s Slim Fit Cotton Formal Shirt',
                'price' => 1450, 'discount_price' => 1199, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'mens_cotton_formal_shirt.jpg',
                'desc' => 'Premium 100% breathable cotton slim fit shirt perfect for formal meetings and casual events.',
            ],
            [
                'cat' => 'MENS', 'sub' => 'T-Shirt',
                'title' => 'Classic Solid Crewneck Cotton T-Shirt',
                'price' => 750, 'discount_price' => 590, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1521572267360-ee0c2909d518?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'mens_crewneck_cotton_tshirt.jpg',
                'desc' => 'High quality combed cotton casual t-shirt with soft fabric and durable stitching.',
            ],
            [
                'cat' => 'MENS', 'sub' => 'Trousers',
                'title' => 'Men\'s Stretch Casual Chino Trousers',
                'price' => 1850, 'discount_price' => 1490, 'is_sale' => 1, 'is_new' => 0,
                'img_url' => 'https://images.unsplash.com/photo-1473966968600-fa801b869a1a?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'mens_chino_trousers.jpg',
                'desc' => 'Tailored stretch chino trousers offering comfort, flexibility and refined style.',
            ],
            [
                'cat' => 'MENS', 'sub' => 'Wallet',
                'title' => 'Men\'s Vintage Genuine Leather Bifold Wallet',
                'price' => 1200, 'discount_price' => 950, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1627123424574-724758594e93?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'mens_leather_bifold_wallet.jpg',
                'desc' => 'Handcrafted top-grain leather wallet with multiple card slots and currency compartments.',
            ],
            [
                'cat' => 'MENS', 'sub' => 'Sunglasses',
                'title' => 'Polarized UV400 Classic Aviator Sunglasses',
                'price' => 1100, 'discount_price' => 850, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1511499767150-a48a237f0083?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'mens_aviator_sunglasses.jpg',
                'desc' => 'Ultra-light metal frame aviators with glare-reduction polarized lenses and 100% UV protection.',
            ],

            // 2. WOMEN'S
            [
                'cat' => 'WOMEN\'S', 'sub' => 'Dress',
                'title' => 'Women\'s Elegant Floral Summer Midi Dress',
                'price' => 2400, 'discount_price' => 1890, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1572804013309-59a88b7e92f1?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'womens_floral_summer_dress.jpg',
                'desc' => 'Flowy, lightweight floral printed midi dress designed for effortless comfort and grace.',
            ],
            [
                'cat' => 'WOMEN\'S', 'sub' => 'Bags',
                'title' => 'Women\'s Luxury Structured Leather Handbag',
                'price' => 3200, 'discount_price' => 2550, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'womens_luxury_leather_handbag.jpg',
                'desc' => 'Chic top-handle leather satchel bag with gold-tone hardware and detachable shoulder strap.',
            ],
            [
                'cat' => 'WOMEN\'S', 'sub' => 'Shoes',
                'title' => 'Women\'s Casual Slip-On Flat Loafers',
                'price' => 1950, 'discount_price' => 1590, 'is_sale' => 1, 'is_new' => 0,
                'img_url' => 'https://images.unsplash.com/photo-1543163521-1bf539c55dd2?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'womens_slipon_flat_loafers.jpg',
                'desc' => 'Soft cushioned sole women\'s loafers providing all-day support with modern minimal styling.',
            ],
            [
                'cat' => 'WOMEN\'S', 'sub' => 'Shirt',
                'title' => 'Women\'s Casual Button-Down Linen Shirt',
                'price' => 1350, 'discount_price' => 1050, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1598554747436-c9293d6a588f?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'womens_linen_casual_shirt.jpg',
                'desc' => 'Relaxed fit breathable linen shirt featuring a notched collar and soft neutral tones.',
            ],

            // 3. KIDS
            [
                'cat' => 'KIDS', 'sub' => 'Dress',
                'title' => 'Girls Party Wear Fluffy Princess Dress',
                'price' => 1800, 'discount_price' => 1390, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1622290291468-a28f7a7dc6a8?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'kids_girls_princess_dress.jpg',
                'desc' => 'Charming festive dress with soft inner lining for total comfort during celebrations.',
            ],
            [
                'cat' => 'KIDS', 'sub' => 'School Bags',
                'title' => 'Kids Ergonomic Cartoon School Backpack',
                'price' => 1400, 'discount_price' => 1090, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1577741314755-048d8525d31e?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'kids_school_backpack.jpg',
                'desc' => 'Waterproof lightweight school bag with padded shoulder straps and dual water bottle pockets.',
            ],

            // 4. KIDS TOYS
            [
                'cat' => 'KIDS TOYS', 'sub' => 'Cars',
                'title' => 'High-Speed Remote Control Off-Road RC Monster Car',
                'price' => 2200, 'discount_price' => 1650, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1594787318286-3d835c1d207f?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'kids_rc_monster_car.jpg',
                'desc' => 'Rechargeable 2.4GHz high-torque off-road RC car with shock absorbers and rugged rubber tires.',
            ],
            [
                'cat' => 'KIDS TOYS', 'sub' => 'Educational Toys',
                'title' => '120-Piece Creative DIY Building Blocks Set',
                'price' => 1500, 'discount_price' => 1150, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1587654780291-39c9404d746b?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'kids_building_blocks_set.jpg',
                'desc' => 'Colorful non-toxic interlocking blocks fostering creativity, spatial awareness and motor skills.',
            ],
            [
                'cat' => 'KIDS TOYS', 'sub' => 'Many More',
                'title' => 'Interactive Wooden Animal Puzzle & Sorting Board',
                'price' => 950, 'discount_price' => 720, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1566576912321-d58ddd7a6088?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'kids_wooden_puzzle_board.jpg',
                'desc' => 'Safe smooth-edge natural wooden puzzle designed for early childhood cognitive development.',
            ],

            // 5. HANDICRAFT ITEMS
            [
                'cat' => 'HANDICRAFT ITEMS', 'sub' => 'Decoration',
                'title' => 'Handcrafted Natural Bamboo Storage & Fruit Basket',
                'price' => 850, 'discount_price' => 650, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1596178065887-1198b6148b2b?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'handicraft_bamboo_basket.jpg',
                'desc' => 'Eco-friendly traditional artisan woven bamboo basket for dining decor and fruit serving.',
            ],
            [
                'cat' => 'HANDICRAFT ITEMS', 'sub' => 'Flower Vase',
                'title' => 'Minimalist Handmade Terracotta Flower Vase',
                'price' => 1100, 'discount_price' => 880, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1612196808214-b8e1d6145a8c?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'handicraft_terracotta_vase.jpg',
                'desc' => 'Clay handcrafted ceramic vase with matte earthy finish, perfect for dried florals and centerpieces.',
            ],

            // 6. JUTE BAGS
            [
                'cat' => 'JUTE BAGS', 'sub' => 'Eco Friendly Bags',
                'title' => 'Heavy-Duty Reusable Eco-Friendly Jute Shopping Tote',
                'price' => 550, 'discount_price' => 399, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'jute_shopping_tote_bag.jpg',
                'desc' => 'Laminated natural biodegradable jute bag with reinforced handles for daily shopping and events.',
            ],

            // 7. CARPETS
            [
                'cat' => 'CARPETS', 'sub' => 'Shotoronji Fancy Carpets',
                'title' => 'Exclusive Handloom Shotoronji Fancy Living Room Carpet',
                'price' => 3800, 'discount_price' => 2950, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1600121848594-d8644e57abab?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'carpet_shotoronji_fancy.jpg',
                'desc' => 'Authentic Rangpur Shotoronji handwoven carpet with rich geometric patterns and premium yarn.',
            ],

            // 8. LEATHER
            [
                'cat' => 'LEATHER', 'sub' => 'Office Bags',
                'title' => 'Executive Full-Grain Leather Laptop Briefcase Bag',
                'price' => 4500, 'discount_price' => 3650, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'leather_laptop_briefcase.jpg',
                'desc' => 'Crafted from authentic full-grain cowhide leather with padded 15.6 inch laptop sleeve and organizer.',
            ],
            [
                'cat' => 'LEATHER', 'sub' => 'Wallet',
                'title' => 'Slim RFID-Protected Minimalist Leather Cardholder',
                'price' => 850, 'discount_price' => 650, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1627123424574-724758594e93?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'leather_rfid_cardholder.jpg',
                'desc' => 'Compact genuine leather card wallet with quick-pull access and RFID blocking lining.',
            ],

            // 9. BEDSHEETS
            [
                'cat' => 'BEDSHEETS', 'sub' => 'Home Use Exclusive Bedsheets',
                'title' => '100% Pure Egyptian Cotton King Size Bedsheet Set',
                'price' => 2800, 'discount_price' => 2190, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'bedsheet_cotton_king_set.jpg',
                'desc' => '300 thread count silky soft pure cotton bedsheet with two matching luxury pillow covers.',
            ],

            // 10. TRAVEL BAGS
            [
                'cat' => 'TRAVEL BAGS', 'sub' => 'All Types of Travel Bags',
                'title' => 'Waterproof Large Capacity Expandable Travel Duffel Bag',
                'price' => 2600, 'discount_price' => 1990, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'travel_duffel_bag.jpg',
                'desc' => 'Multi-compartment flight cabin approved weekend travel duffel with separate shoe compartment.',
            ],

            // 11. STATIONARY ITEMS
            [
                'cat' => 'STATIONARY ITEMS', 'sub' => 'Note Books',
                'title' => 'Premium Hardcover Dotted Journal & Notebook Set',
                'price' => 650, 'discount_price' => 490, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'stationary_journal_notebook.jpg',
                'desc' => 'Thick bleed-resistant 100gsm paper notebook with ribbon bookmark and elastic closure band.',
            ],

            // 12. HOME DECORATION
            [
                'cat' => 'HOME DECORATION', 'sub' => 'Exclusive Decoration Piece',
                'title' => 'Modern Nordic Abstract Ceramic Sculpture Figurine',
                'price' => 1950, 'discount_price' => 1490, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'home_decor_ceramic_sculpture.jpg',
                'desc' => 'Artistic aesthetic centerpiece for coffee tables, bookshelf display, and modern interiors.',
            ],

            // 13. HOUSEHOLD ITEMS
            [
                'cat' => 'HOUSEHOLD ITEMS', 'sub' => 'Blenders',
                'title' => 'Multi-Function High-Speed Electric Blender & Food Processor',
                'price' => 3800, 'discount_price' => 2990, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1570222094114-d054a817e56b?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'household_electric_blender.jpg',
                'desc' => 'Powerful 750W copper motor with stainless steel blades for smoothies, spices and juicing.',
            ],

            // 14. BLANKET
            [
                'cat' => 'BLANKET', 'sub' => 'Wool',
                'title' => 'Ultra-Soft Double Ply Microfiber Warm Winter Blanket',
                'price' => 3200, 'discount_price' => 2450, 'is_sale' => 1, 'is_new' => 1,
                'img_url' => 'https://images.unsplash.com/photo-1584100936595-c0654b55a2e2?auto=format&fit=crop&w=600&q=80',
                'file_name' => 'blanket_winter_microfiber.jpg',
                'desc' => 'Cozy double-layer thermal blanket offering supreme warmth and silky plush softness.',
            ]
        ];

        $targetDir = public_path('images/product');
        if (!is_dir($targetDir)) {
            @mkdir($targetDir, 0777, true);
        }

        foreach ($productsData as $data) {
            $cat = Category::where('title', $data['cat'])->where('parent_id', 0)->first();
            if (!$cat) {
                $cat = Category::create([
                    'title' => $data['cat'],
                    'slug' => \Illuminate\Support\Str::slug($data['cat']),
                    'parent_id' => 0,
                    'is_active' => 1,
                    'is_featured' => 1,
                    'position' => 1
                ]);
            }

            $subCatId = null;
            if (!empty($data['sub'])) {
                $sub = Category::where('title', $data['sub'])->where('parent_id', $cat->id)->first();
                if (!$sub) {
                    $sub = Category::create([
                        'title' => $data['sub'],
                        'slug' => \Illuminate\Support\Str::slug($data['sub']),
                        'parent_id' => $cat->id,
                        'is_active' => 1,
                        'is_featured' => 1,
                        'position' => 1
                    ]);
                }
                $subCatId = $sub->id;
            }

            // Download image if not already cached
            $filePath = $targetDir . '/' . $data['file_name'];
            if (!file_exists($filePath)) {
                try {
                    $ctx = stream_context_create([
                        'http' => [
                            'timeout' => 8,
                            'header' => "User-Agent: Mozilla/5.0\r\n"
                        ]
                    ]);
                    $content = @file_get_contents($data['img_url'], false, $ctx);
                    if ($content) {
                        file_put_contents($filePath, $content);
                    }
                } catch (\Exception $e) {
                    // Fallback to URL if download fails
                }
            }

            $imageVal = file_exists($filePath) ? $data['file_name'] : $data['img_url'];

            // Upsert product by title
            $existing = Product::where('title', $data['title'])->first();
            if (!$existing) {
                Product::create([
                    'title' => $data['title'],
                    'category_id' => $cat->id,
                    'sub_category_id' => $subCatId,
                    'price' => $data['price'],
                    'discount_price' => $data['discount_price'],
                    'is_sale' => $data['is_sale'],
                    'is_new' => $data['is_new'],
                    'deal_of_day' => 0,
                    'flash_sale' => 1,
                    'qty' => rand(15, 60),
                    'current_stock' => rand(20, 80),
                    'sold' => rand(12, 140),
                    'image' => $imageVal,
                    'hover_image' => $imageVal,
                    'short_description' => $data['desc'],
                    'description' => $data['desc'] . ' High quality authentic product directly sourced for retail and wholesale buyers at XuLu Mart.',
                    'is_active' => 1,
                    'code' => 'XM-' . rand(1000, 9999),
                    'unit' => 'pcs',
                ]);
            } else {
                $existing->update([
                    'category_id' => $cat->id,
                    'sub_category_id' => $subCatId,
                    'price' => $data['price'],
                    'discount_price' => $data['discount_price'],
                    'is_sale' => $data['is_sale'],
                    'is_new' => $data['is_new'],
                    'image' => $imageVal,
                    'hover_image' => $imageVal,
                    'short_description' => $data['desc'],
                    'is_active' => 1,
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
