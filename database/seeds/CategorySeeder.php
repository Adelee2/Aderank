<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert(
        [
            'topics' => "Data Structures",
            'created_At' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")     
        ],
        [
            'topics' => "Algorithms",
            'created_At' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s") 
        ],
        [
            'topics' => "Implementation",
            'created_At' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s") 
        ],
        [
            'topics' => "Mathematics",
            'created_At' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s") 
        ],
        [
            'topics' => "Machine Learning",
            'created_At' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s") 
        ]
    );
    }
}
