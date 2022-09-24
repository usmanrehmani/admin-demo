<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'category_name' => 'Fashion',
            ],
            [
                'category_name' => 'Sports',
            ],
            [
                'category_name' => 'Stationery',
            ],
            
        ];
        foreach($categories as $category){
            Category::create($category);
        }
    }
    }
    

