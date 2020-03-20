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
            // dd($result);
            if($result ==null){
                return $this->viewsubcat($id);
            	
            }
            elseif($result->is_subcat==0){
                return $this->viewsubcat($id);
            }else{
            	return $this->loadsubcat($id);
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
        $result=[];
        $has_subcat = DB::table('sub_categories')
                        ->join('categories', 'categories.cat_id', '=', 'sub_categories.category_id')
                        ->where('id',$id)
                        ->where('categories.is_subcat',1)
                        ->get()->first();
            // dd($has_subcat);
            
        if($has_subcat ==null ){
            $result = DB::table('questions')
                        ->where('questions.quesid',$id)
                        ->get();
                $is_subcat=false;
        }
        else{
        	$result = DB::table('questions')
    		            ->join('sub_categories', 'sub_categories.id', '=', 'questions.subcategory_id')
    		            ->where('questions.subcategory_id',$id)
    		            ->get();
                    // dd($result);
            $is_subcat=true;
            
        }
        $topics = Category::all();
        $subcat = DB::table('sub_categories')
		            ->join('categories', 'sub_categories.category_id','=','categories.cat_id')
		            ->get();

         // dd($subcat);
    	return view('viewsubcatpage',compact('result','topics','subcat','is_subcat'));
    }

    public function quespage($id){
        $has_subcat = DB::table('categories')
            ->where('cat_id',$id)
            ->get()->first();
            // dd($has_subcat);
        if($has_subcat->is_subcat!==0){
    	   $result = DB::table('questions')
	            ->join('sub_categories', 'sub_categories.id', '=', 'questions.subcategory_id')
	            ->where('questions.quesid',$id)
	            ->get();
        }
         else{
            $result = DB::table('questions')
                    ->where('questions.quesid',$id)
                    ->get();
            $is_subcat=false;
        }
        $topics = Category::all();
        $subcat = DB::table('sub_categories')
                    ->join('categories', 'sub_categories.category_id','=','categories.cat_id')
                    ->get();
         // dd($result);
    	return view('quespage',compact('result','topics','subcat'));
    }
    public function mydashboard($token){
    	// $token = $token;
    	$result = DB::table('personal_data')
		            ->where('personal_data.token',$token)
		            ->get()->first();
         if($result->p_id !==""){
	          $ques = DB::table('user_question')
	          			->join('questions', 'user_question.question_id', '=', 'questions.quesid')
                        ->join('categories', 'categories.cat_id', '=', 'questions.category_id')
                        ->join('sub_categories', 'sub_categories.id', '=', 'questions.subcategory_id')
	          			->where('user_question.user_id',$result->p_id)
	            		->get();
                // $arrtotal=[
                //     'datastructure'=>[
                //                         'yours'=>5
                //                         'total'=>10
                //                         ],
                //     'algorithm'=>[2,6];
                // ]
	            // dd($ques);
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

    public function createpage(){
        $topics = Category::all();

        return view('dashboard.createquestion',compact('topics'));
    }
}
