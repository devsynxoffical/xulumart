<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuCategorySeeder extends Seeder
{
    public function run()
    {
        $tree = [
            "Men's" => ['Shirt', 'T-Shirt', 'Trousers', 'Wallet', 'Sunglasses', 'Others'],
            "Women's" => ['Shirt', 'T-Shirt', 'Dress', 'Bags', 'Shoes', 'Sunglasses', 'Others'],
            'Kids' => ['Boys', 'Girls', 'Dress', 'Pant', 'Shirt', 'T-Shirt', 'School Bags'],
            'Kids Toys' => ['Cars', 'Educational Toys', 'Guns', 'Other Toys'],
            'Handicraft Items' => ['Decoration', 'Flower Vase'],
            'Jute Bags' => [],
            'Carpets' => [],
            'Leather' => ['Wallet', 'Bags', 'Office Bags', 'Laptop Bags'],
            'Bedsheets' => [],
            'Travel Bags' => [],
            'Stationary Items' => ['Pencil', 'Pen', 'Sharpener', 'Note Books', 'Eraser', 'Pencil Box', 'Tiffin Box', 'School Bags', 'Water Bottles'],
            'Home Decoration' => [],
            'Household Items' => ['Blenders', 'Jug', 'Other Items'],
            'Blanket' => ['Cotton', 'Wool'],
        ];

        $descriptions = [
            'Jute Bags' => 'Eco Friendly Bags',
            'Carpets' => 'Shotoronji Fancy Carpets',
            'Bedsheets' => 'Home Use Exclusive Bedsheets',
            'Travel Bags' => 'All Types of Travel Bags',
            'Home Decoration' => 'Exclusive Decoration Piece',
        ];

        $position = 1;
        foreach ($tree as $parentTitle => $children) {
            $parent = Category::firstOrCreate(
                ['title' => $parentTitle, 'parent_id' => 0],
                [
                    'position' => $position,
                    'is_active' => 1,
                    'is_featured' => $position <= 5 ? 1 : 0,
                    'description' => $descriptions[$parentTitle] ?? null,
                ]
            );
            $parent->position = $position;
            $parent->is_active = 1;
            if (isset($descriptions[$parentTitle])) {
                $parent->description = $descriptions[$parentTitle];
            }
            $parent->save();

            $childPos = 1;
            foreach ($children as $childTitle) {
                $child = Category::firstOrCreate(
                    ['title' => $childTitle, 'parent_id' => $parent->id],
                    [
                        'position' => $childPos,
                        'is_active' => 1,
                        'is_featured' => 0,
                    ]
                );
                $child->position = $childPos;
                $child->is_active = 1;
                $child->save();
                $childPos++;
            }
            $position++;
        }
    }
}
