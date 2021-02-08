<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
     
    private function data(){
        return [
            
            'fullname' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => $faker->password, // password
            'remember_token' => Str::random(10),
            'created_At' => timestamp(),
            'updated_At' => timestamp(),
        ];
    }
    public function getAllCollection(){
        $this ->getJson('/users/all')->assertStatus(200);
    }
    public function getACollection(){
        $user = User::find($faker->numberBetween(0, 10));
        $this ->getJson(sprintf('/users/%s',$user->id))->assertStatus(200);
    }
    public function postAResource(){
        
    }
}
