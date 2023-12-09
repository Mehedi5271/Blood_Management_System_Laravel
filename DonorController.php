<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class DonorController extends Controller
{
    public function donor(){
        $profiles = Profile::all();
        return view ('admin.view-donor',compact('profiles'));
    }

    public function mail($id){


        try {
            $mail = new PHPMailer(true);
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'amarullapara@gmail.com';                     //SMTP username
            $mail->Password   = 'rwqujdmbyofjmpyw';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('amarullapara@gmail.com', 'UIU E-CATS Administrator (via eCATS)');
            $mail->addAddress( 'mehedih5271@gmail.com',"Mehadi");     //Add a recipient




            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'UIU E-CATS: New user account';
            $mail->Body    = "Hi mac " . "<br>

            A new account has been created for you at <b>'UIU E-CATS'</b>
            and you have been issued with a new temporary password.<br>

            Your current login information is now:<br>
            username:" .  "<br>
            password: 1234<br>
            (you will have to change your password
            when you login for the first time)

            To start using 'UIU E-CATS’,login at
            http://lms.uiu.ac.bd/login/?lang=en

            <br> In most mail programs, this should appear as a blue link
            which you can just click on. If that doesn't work,
            then cut and paste the address into the address
            line at the top of your web browser window.<br>

            Cheers from the 'UIU E-CATS’ administrator,

            <br> UIU E-CATS Administrator
            <br> uiu.ecats@gmail.com";


            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


        
        return view ('admin.view-donor',compact('profiles'));
    }


   

   
}
