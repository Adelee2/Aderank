<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Questions;
use Illuminate\Support\Facades\DB;
// use Illuminate\Auth\Middleware\EnsureEmailIsVerified;

class ViewEngine extends Controller
{
	
    public function home(){

    	return view('home');
    }
    public function topics(){
    	$result = Category::all();
    	return view('topics',compact('result'));
    }
   	public function has_subcat($id){
   		$result = DB::table('categories')
            ->where('cat_id',$id)
            ->get()->first();
            if($result->is_subcat){
            	return $this->loadsubcat($id);
            }else{
            	return $this->viewsubcat($id);
            }
   	}
    public function loadsubcat($id){
    	$result = DB::table('sub_categories')
		            ->join('categories', 'sub_categories.category_id','=','categories.cat_id')
		            ->where('sub_categories.category_id',$id)
		            ->get();
         // dd($result);
    	return view('loadsubcatpage',compact('result'));
    }
    public function viewsubcat($id){
    	$result = DB::table('questions')
		            ->join('sub_categories', 'sub_categories.id', '=', 'questions.subcategory_id')
		            ->where('questions.subcategory_id',$id)
		            ->get();
        $topics = Category::all();
        $subcat = DB::table('sub_categories')
		            ->join('categories', 'sub_categories.category_id','=','categories.cat_id')
		            ->get();

         // dd($subcat);
    	return view('viewsubcatpage',compact('result','topics','subcat'));
    }

    public function quespage($id){
    	$result = DB::table('questions')
	            ->join('sub_categories', 'sub_categories.id', '=', 'questions.subcategory_id')
	            ->where('questions.quesid',$id)
	            ->get();
         // dd($result);
    	return view('quespage',compact('result'));
    }
    public function mydashboard($token){
    	// $token = $token;
    	$result = DB::table('personal_data')
		            ->where('personal_data.token',$token)
		            ->get()->first();
         if($result->p_id !==""){
	          $ques = DB::table('user_question')
	          			->where('userques_id',$result->p_id)
	            		->get();
	        }else{
	        	$ques="";
	        }
         // dd($result);
    	return view('dashboard.dashboard',compact('result','ques'));
    }

    public function errorpage($error)
    {
    	return view('errorpage',compact('error'));
    }
}
