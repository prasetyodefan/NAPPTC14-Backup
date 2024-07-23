<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = collect([
            ['name' => 'politik'],
            ['name' => 'teknologi'],
            ['name' => 'kesehatan'],
            ['name' => 'hiburan'],
            ['name' => 'olahraga'],
        ]);

        $categories->each(function ($category) {
            Category::create($category);
        });
    }
}
