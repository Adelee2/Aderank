<?php

use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('subcategory')->insert(
            [
                'category_id' => 1,
                'subtopics' => "Arrays",
                'created_At' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")      
            ],
            [
                'category_id' => 2,
                'subtopics' => "Sorting",
                'created_At' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")      
            ],
            [
                'category_id' =>3,
                'subtopics' => "Hashmaps",
                'created_At' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")      
            ],
            [
                'category_id' => 4,
                'subtopics' => "Bitwise",
                'created_At' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")      
            ],
            [
                'category_id' => 5,
                'subtopics' => "Adversarial",
                'created_At' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")      
            ],
        );
    }
}
