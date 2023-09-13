<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'News/ Updates'],
        ];

        foreach ($categories as $key => $cayegory) {
            DB::beginTransaction();
            Category::updateOrCreate($cayegory);
            DB::commit();
        }
    }
}
