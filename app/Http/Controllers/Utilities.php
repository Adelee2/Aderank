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
    public function uploadquestion(Request $request)
    {
        $results="";
        $code = $request->codesoln;
        $input= $request->testcases;
        $lang = $request->lang;
//        dd($soln);


        if(\Session::has('key')) {
            //for c++
            if ($lang == '1') {
//                dd($soln);
                $CC="g++ --std=c++14";
                $out="./a.out";
                $filename_code="main.cpp";
                $filename_in="input.txt";
                $filename_error="error.txt";
                $executable="a.out";
                $command=$CC." -lm ".$filename_code;
                $command_error=$command." 2>".$filename_error;

                if(trim($code)=="")
                die("The code area is empty");

                $file_code=fopen($filename_code,"w+");
                fwrite($file_code,$code);
                fclose($file_code);

                $file_in=fopen($filename_in,"w+");
                fwrite($file_in,$input);
                fclose($file_in);

                exec("chmod 777 $executable");
                exec("chmod 777 $filename_error");

                shell_exec($command_error);
                $error=file_get_contents($filename_error);
                $executionStartTime = microtime(true);
                if(trim($error)=="")
                {
                    if(trim($input)=="" || $input==null)
                    {

                        $output=shell_exec($out);
                    }
                    else
                    {
//                        $out = "g++ --std=c++14 main.cpp a && ./a";
                        $out=$out." < ".$filename_in;
                        $output=shell_exec($out);
//                        dd($out);
                    }
                    $results .= "<pre>$output</pre>";
//                    dd($output);
                    $results .= "<textarea id='div' class='form-control' name='output' rows='10' cols='50'>$output</textarea><br><br>";
                }
                else if(!strpos($error,"error"))
                {
                    $results .= "<pre>$error</pre>";
                    if(trim($input)=="")
                    {     dd($input);
                        $output=shell_exec($out);
                    }
                    else
                    {
                        $out=$out." < ".$filename_in;
                        $output=shell_exec($out);
                    }
//                    dd($output);
                    $results .= "<textarea id='div' class='form-control' name='output' rows='10' cols='50'>$output</textarea><br><br>";
                }
                else
                {
                    $results .= "<pre>$error</pre>";
                }
                $executionEndTime = microtime(true);
                $seconds = $executionEndTime - $executionStartTime;
                $seconds = sprintf('%0.2f', $seconds);
                $results .= "<pre>Compiled And Executed In: $seconds s</pre>";
                if($seconds>3)
                {
                    $results .= "<pre>Verdict : TLE</pre>";
                }
                else
                {
                    $results .= "<pre>Verdict : AC</pre>";
                }
//                dd($output);

                exec("rm $filename_code");
                exec("rm *.o");
                exec("rm *.txt");
                exec("rm $executable");

                return back()->with('results',$results);

            } //for php
            elseif ($lang == '2') {
                $CC="python2.7";
                $filename_code="main.py";
                $filename_in="input.txt";
                $filename_error="error.txt";
                //$executable="a.out";
                $command=$CC." ".$filename_code;
                $command_error=$command." 2>".$filename_error;

                //if(trim($code)=="")
                //die("The code area is empty");

                $file_code=fopen($filename_code,"w+");
                fwrite($file_code,$code);
                fclose($file_code);
                $file_in=fopen($filename_in,"w+");
                fwrite($file_in,$input);
                fclose($file_in);
                //exec("chmod 777 $executable");
                exec("chmod 777 $filename_error");

                shell_exec($command_error);
                $error=file_get_contents($filename_error);

                if(trim($error)=="")
                {
                    if(trim($input)=="")
                    {
                        $output=shell_exec($command);
                    }
                    else
                    {
                        $command=$command." < ".$filename_in;
                        $output=shell_exec($command);
                    }
                    $results.= "<pre>$output</pre>";
                }
                else
                {
                    $results .= "<pre>$error</pre>";
                }
                exec("rm $filename_code");
                exec("rm *.txt");
                
                return back()->with('results',$results); 
            } //for javascript
            elseif ($lang == '3') {

            }
        }
        else{
            return redirect('login')->with('success','login to continue')->with('ques','true');
        }
    }


}
