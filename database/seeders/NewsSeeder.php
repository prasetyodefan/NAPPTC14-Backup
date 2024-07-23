<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = collect([
            ['id' => 1, 'title' => 'Breaking News: Example Title 1', 'body' => 'This is a short description of the news article number 1.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-20', 'region' => 'Jakarta'],
            ['id' => 2, 'title' => 'Tech Update: Example Title 2', 'body' => 'This is a short description of the news article number 2.', 'category' => 'teknologi', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-19', 'region' => 'Jawa Timur'],
            ['id' => 3, 'title' => 'Kesehatan Highlight: Example Title 3', 'body' => 'This is a short description of the news article number 3.', 'category' => 'kesehatan', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-18', 'region' => 'Jawa Barat'],
            ['id' => 4, 'title' => 'Hiburan Buzz: Example Title 4', 'body' => 'This is a short description of the news article number 4.', 'category' => 'hiburan', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-17', 'region' => 'Jawa Tengah'],
            ['id' => 5, 'title' => 'Political Debate: Example Title 5', 'body' => 'This is a short description of the news article number 5.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-16', 'region' => 'Jakarta'],
            ['id' => 6, 'title' => 'Kesehatan Alert: Example Title 6', 'body' => 'This is a short description of the news article number 6.', 'category' => 'kesehatan', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-15', 'region' => 'Jawa Timur'],
            ['id' => 7, 'title' => 'Breaking News: Example Title 7', 'body' => 'This is a short description of the news article number 7.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-14', 'region' => 'Jawa Barat'],
            ['id' => 8, 'title' => 'Tech Update: Example Title 8', 'body' => 'This is a short description of the news article number 8.', 'category' => 'teknologi', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-13', 'region' => 'Jawa Tengah'],
            ['id' => 9, 'title' => 'Kesehatan Highlight: Example Title 9', 'body' => 'This is a short description of the news article number 9.', 'category' => 'kesehatan', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-12', 'region' => 'Jakarta'],
            ['id' => 10, 'title' => 'Hiburan Buzz: Example Title 10', 'body' => 'This is a short description of the news article number 10.', 'category' => 'hiburan', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-11', 'region' => 'Jawa Timur'],
            ['id' => 11, 'title' => 'Political Debate: Example Title 11', 'body' => 'This is a short description of the news article number 11.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-10', 'region' => 'Jawa Barat'],
            ['id' => 12, 'title' => 'Kesehatan Alert: Example Title 12', 'body' => 'This is a short description of the news article number 12.', 'category' => 'kesehatan', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-09', 'region' => 'Jawa Tengah'],
            ['id' => 13, 'title' => 'Breaking News: Example Title 13', 'body' => 'This is a short description of the news article number 13.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-08', 'region' => 'Jakarta'],
            ['id' => 14, 'title' => 'Tech Update: Example Title 14', 'body' => 'This is a short description of the news article number 14.', 'category' => 'teknologi', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-07', 'region' => 'Jawa Timur'],
            ['id' => 15, 'title' => 'Kesehatan Highlight: Example Title 15', 'body' => 'This is a short description of the news article number 15.', 'category' => 'kesehatan', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-06', 'region' => 'Jawa Barat'],
            ['id' => 16, 'title' => 'Hiburan Buzz: Example Title 16', 'body' => 'This is a short description of the news article number 16.', 'category' => 'hiburan', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-05', 'region' => 'Jawa Tengah'],
            ['id' => 17, 'title' => 'Political Debate: Example Title 17', 'body' => 'This is a short description of the news article number 17.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-04', 'region' => 'Jakarta'],
            ['id' => 18, 'title' => 'Kesehatan Alert: Example Title 18', 'body' => 'This is a short description of the news article number 18.', 'category' => 'kesehatan', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-03', 'region' => 'Jawa Timur'],
            ['id' => 19, 'title' => 'Breaking News: Example Title 19', 'body' => 'This is a short description of the news article number 19.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-02', 'region' => 'Jawa Barat'],
            ['id' => 20, 'title' => 'Tech Update: Example Title 20', 'body' => 'This is a short description of the news article number 20.', 'category' => 'teknologi', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-07-01', 'region' => 'Jawa Tengah'],
            ['id' => 21, 'title' => 'Kesehatan Highlight: Example Title 21', 'body' => 'This is a short description of the news article number 21.', 'category' => 'olahraga', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-06-30', 'region' => 'Jakarta'],
            ['id' => 22, 'title' => 'Hiburan Buzz: Example Title 22', 'body' => 'This is a short description of the news article number 22.', 'category' => 'hiburan', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-06-29', 'region' => 'Jawa Timur'],
            ['id' => 23, 'title' => 'Political Debate: Example Title 23', 'body' => 'This is a short description of the news article number 23.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-06-28', 'region' => 'Jawa Barat'],
            ['id' => 24, 'title' => 'Kesehatan Alert: Example Title 24', 'body' => 'This is a short description of the news article number 24.', 'category' => 'olahraga', 'image_url' => 'https://via.placeholder.com/800', 'date' => '2024-06-27', 'region' => 'Jawa Tengah'],
        ]);

        DB::table('news')->insert($news->toArray());
    }
}
