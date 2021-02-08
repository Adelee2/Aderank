<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('questions')->insert([
            'category_id' => 1,
            'subcategory_id' => 1,
            'question' => "",
            'solution' => "",
            'created_At' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s") 
        ],
        [
            'category_id' => 1,
            'subcategory_id' => 2,
            'question' => "",
            'solution' => "",
            'created_At' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s") 
        ],
        [
            'category_id' => 2,
            'subcategory_id' => 1,
            'question' => "",
            'solution' => "",
            'created_At' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s") 
        ],
        [
            'category_id' => 3,
            'subcategory_id' => 3,
            'question' => "",
            'solution' => "",
            'created_At' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s") 
        ]);
    }
}
