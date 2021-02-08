<?php

use Illuminate\Database\Seeder;

class UserSolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_solution')->insert([
            'question_id' => 1,
            'user_id' =>1,
            'user_solution' => "",
            'lang_used' => "Javascript",
            'created_At' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s") 
        ]);
    }
}
