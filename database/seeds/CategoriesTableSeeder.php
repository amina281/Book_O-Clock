<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        DB::table('Category')->insert([
            ['name' => 'Romance', 'slug' => 'romance', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'History', 'slug' => 'history', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Classic', 'slug' => 'classic', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Adventure', 'slug' => 'adventure', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'YA', 'slug' => 'ya', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Science Fiction', 'slug' => 'science-fiction', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
