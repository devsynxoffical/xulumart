<?php

use Illuminate\Database\Migrations\Migration;
use App\Models\Category;

return new class extends Migration
{
    public function up(): void
    {
        $taxonomy = [
            "MENS" => [
                'subcategories' => ['Shirt', 'T-Shirt', 'Trousers', 'Wallet', 'Sunglasses', 'Others'],
                'image' => '1703156431.jpg',
            ],
            "WOMEN'S" => [
                'subcategories' => ['Shirt', 'T-Shirt', 'Dress', 'Bags', 'Shoes', 'Sunglasses', 'Others'],
                'image' => '1703156471.jpg',
            ],
            "KIDS" => [
                'subcategories' => ['Boys', 'Girls', 'Dress', 'Pant', 'Shirt', 'T-Shirt', 'School Bags'],
                'image' => '1703156584.jpg',
            ],
            "KIDS TOYS" => [
                'subcategories' => ['Cars', 'Educational Toys', 'Guns', 'Many More'],
                'image' => '1703156619.jpg',
            ],
            "HANDICRAFT ITEMS" => [
                'subcategories' => ['Decoration', 'Flower Vase', 'Bamboo Mat', 'Floor Mat', 'Hand Made Bags', 'Etc'],
                'image' => '1703156237.jpg',
            ],
            "JUTE BAGS" => [
                'subcategories' => ['Eco Friendly Bags'],
                'image' => '1703156471.jpg',
            ],
            "CARPETS" => [
                'subcategories' => ['Shotoronji Fancy Carpets'],
                'image' => '1703156377.jpg',
            ],
            "LEATHER" => [
                'subcategories' => ['Wallet', 'Bags', 'Office Bags', 'Laptop Bags'],
                'image' => '1703156431.jpg',
            ],
            "BEDSHEETS" => [
                'subcategories' => ['Home Use Exclusive Bedsheets'],
                'image' => '1703156718.jpg',
            ],
            "TRAVEL BAGS" => [
                'subcategories' => ['All Types of Travel Bags'],
                'image' => '1703156471.jpg',
            ],
            "STATIONARY ITEMS" => [
                'subcategories' => ['Pencil', 'Pen', 'Sharpner', 'Note Books', 'Eraser', 'Pencil Box', 'Tiffen Box', 'School Bags', 'Water Bottles'],
                'image' => '1703156785.jpg',
            ],
            "HOME DECORATION" => [
                'subcategories' => ['Exclusive Decoration Piece'],
                'image' => '1703156237.jpg',
            ],
            "HOUSEHOLD ITEMS" => [
                'subcategories' => ['Blenders', 'Jug', 'Many More'],
                'image' => '1728995983.jpg',
            ],
            "BLANKET" => [
                'subcategories' => ['Cotton', 'Wool'],
                'image' => '1703156377.jpg',
            ],
        ];

        $pos = 1;
        foreach ($taxonomy as $parentTitle => $data) {
            $parent = Category::where('title', $parentTitle)->where('parent_id', 0)->first();
            if (!$parent) {
                // Check case-insensitively
                $parent = Category::whereRaw('LOWER(title) = ?', [strtolower($parentTitle)])->where('parent_id', 0)->first();
            }

            if (!$parent) {
                $parent = new Category();
                $parent->title = $parentTitle;
                $parent->parent_id = 0;
                $parent->image = $data['image'];
            }

            $parent->position = $pos++;
            $parent->is_active = 1;
            $parent->is_featured = 1;
            $parent->save();

            // Subcategories
            $subPos = 1;
            foreach ($data['subcategories'] as $subTitle) {
                $child = Category::where('title', $subTitle)->where('parent_id', $parent->id)->first();
                if (!$child) {
                    $child = new Category();
                    $child->title = $subTitle;
                    $child->parent_id = $parent->id;
                    $child->image = $parent->image;
                }
                $child->position = $subPos++;
                $child->is_active = 1;
                $child->save();
            }
        }
    }

    public function down(): void
    {
        // Safe down
    }
};
