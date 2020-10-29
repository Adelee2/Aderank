<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Hash;
use Stevebauman\Location\LocationServiceProvider;
use Ramsey\Uuid\Uuid;

class VerifyEmailController extends Controller
{
     public function sendEmail (Request $request) {

     	$success="";
     	$error="";

        $firname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $pass = $request->password;

        $hashpass = Hash::make($pass);

        $ip= \Request::ip();
        // dd($ip);
        $position = \Location::get('$ip');
        $country = $position->countryName;
        $token = Uuid::uuid1()->toString();
        // dd($token);
        $result= DB::table('personal_data')->where('email',$email)->where('firstname',$firname)->where('lastname',$lastname)->get();
        
        if(count($result)>0){
        	return back()->with('error','User Already exists!!!');
        }

        $response = DB::table('personal_data')->insert(
            ['firstname' => $firname, 'lastname' => $lastname, 'email' => $email, 'password'=>$hashpass,'token'=>$token, 'country' => $country]
        );
        
    // is method a POST ?
        if(\Request::isMethod('post')) {                                                 // load Composer's autoloader

            $mail = new PHPMailer(true);                            // Passing `true` enables exceptions

            try {
                // Server settings
                $mail->SMTPDebug = 0;                                   // Enable verbose debug output
                $mail->isSMTP();                                        // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';                                             // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                                 // Enable SMTP authentication
                $mail->Username = 'adeleyeleeman@gmail.com';             // SMTP username
                $mail->Password = 'ADELEYE202020';              // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom('adeleyeleeman@gmail.com', 'Mailer');
                $mail->addAddress($request->email, $request->firstname);  // Add a recipient, Name is optional
                $mail->addReplyTo('adeleyeleeman@gmail.com', 'Mailer');
                // $mail->addCC('his-her-email@gmail.com');
                // $mail->addBCC('his-her-email@gmail.com');

                //Content
                $mail->isHTML(true);                                                                    // Set email format to HTML
                $stremail= (string)$email;
                $mail->Subject = "VerifyEmailAccount";
                $mail->Body    = '
                                <html>
                                    <head>
                                    <meta charset="utf-8">
                                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                    <title>Aderank</title>
                                    <meta name="viewport" content="width=device-width, initial-scale=1">
                                    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
                                    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
                                    <meta name="author" content="freehtml5.co" />

                                    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
                                    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

                                    <!-- Bootstrap  -->
                                    <link rel="stylesheet" href="{{ url("education/css/bootstrap.css") }}">

                                    <style type="text/css">
                                        
                                        .phpmailer-page {
                                          width: 100%;
                                          padding: 8% 0 0;
                                          margin: auto;
                                        }
                                        
                                        .form {
                                          position: relative;
                                          z-index: 1;
                                          background: #FFFFFF;
                                          max-width: 400px;
                                          margin: 0 auto 100px;
                                          padding: 45px;
                                          text-align: center;
                                          box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
                                            }
                                        body {
                                          background: #F8F9FA;
                                          font-family: "Roboto", sans-serif;
                                          -webkit-font-smoothing: antialiased;
                                          -moz-osx-font-smoothing: grayscale;      
                                        }
                                        
                                    </style>

                                    </head>
                                    <body>

                                        <div class="phpmailer-page">
                                            <h5>Dear '.$request->firstname.", ".$request->lastname.'</h5><br/>
                                            <div class="form">
                                            	<p><b>Please verify your account</b></p>
                                            	<div style = "margin-top: 2%; background-color: #2ebb69; border-style: none; border-radius: 4px; width: 50%; padding: 2% 8%; color: #fff;">
                                            	<a href="http://aderankcoding.herokuapp.com/verify/'.$stremail.'/'.$token.'">Verify here</a>
                                            	<div>
                                            </div>
                                        </div> 

                                    </body>
                                </html>
                                ';    

                $mail->send();
                $success = "Successful!! Please check your email to activate your account";
                // return back()->with('success','Message has been sent!');
                return back()->with('successes',$success);
                // return view('registerpage',compact('success'));

            } catch (Exception $e) {
                $error = "Error performing operation!!";
                return back()->with('error',$error);
                // return back()->with('error','Message could not be sent.');
            }
        }
    }
    public function resetpassword(Request $request){

    }
}
