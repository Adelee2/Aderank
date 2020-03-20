<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Utilities extends Controller
{
	public function getsubcat($cat_id){
		$cat_id = (int)$cat_id;
		$subcat = DB::table('sub_categories')
		           	->where('category_id',$cat_id)
		            ->get();
		return $subcat;
	}

	public function insertquestion(Request $request){
		$topic = $request->topics;
		$difficulty= (int)$request->difficulty;
		$subtopic = $request->subtopics;
		$question = $request->questions;
		if($topic !=="" && $subtopic !=="" && $question!==""){
			if($subtopic =="none"){
				DB::table('questions')->insert(['category_id' => $topic, 'questions' => $question, 'difficulty' => $difficulty]);
			}
			else{
				DB::table('questions')->insert(['category_id' => $topic, 'subcategory_id'=>$subtopic, 'questions' => $question, 'difficulty' => $difficulty]);
			}
		}
		else{
			return back()->with("error","required fields are empty");
		}

		return redirect()->with("success","successful!!");
	}

	public function getquestion($id){
		$result = DB::table('questions')
				->join('categories','categories.cat_id','=','questions.category_id')
	            ->join('sub_categories', 'sub_categories.id', '=', 'questions.subcategory_id')
	            ->where('questions.quesid',$id)
	            ->get();
	     return $result;
	}
    //


}
