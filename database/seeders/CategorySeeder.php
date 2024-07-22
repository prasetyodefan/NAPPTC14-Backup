<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $categories = collect([
            ['id' => 1, 'name' => 'politik'],
            ['id' => 2, 'name' => 'teknologi'],
            ['id' => 3, 'name' => 'kesehatan'],
            ['id' => 4, 'name' => 'hiburan'],
            ['id' => 5, 'name' => 'olahraga'],
        ]);

        DB::table('categories')->insert($categories->toArray());
    }
}
