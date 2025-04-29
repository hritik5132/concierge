<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mail = new PHPMailer(true);


    $name          = $_POST['fname'];
    $name          = $_POST['lname'];
    $mobile        = $_POST['phone'];
    $email         = $_POST['email'];
    $description   = $_POST['description'];

    if (!empty($fname) && !empty($email) && !empty($mobile)) {
        try {

            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hr@nexinfotech.com';
            $mail->Password = 'Hr@32145';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom('hr@nexinfotech.com', 'website');
            $mail->addAddress('ak9353065@gmail.com');

            $mail->isHTML(true);
            $subject = "Enquiry form";
            $mail->Subject = $subject;
            $mail->Body    = "<!doctype html>
                                <html lang='en-US'>

                                <head>
                                    <meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
                                    <title>Contact Form</title>
                                    <meta name='description' content='Contact Form'>
                                </head>
                                <style>
                                    a:hover {
                                        text-decoration: underline !important;
                                    }
                                </style>

                                <body marginheight='0' topmargin='0' marginwidth='0' style='margin: 0px; background-color: #f2f3f8;' leftmargin='0'>
                                    <table cellspacing='0' border='0' cellpadding='0' width='100%' bgcolor='#f2f3f8' style='@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: Open Sans, sans-serif;'>
                                        <tr>
                                            <td>
                                                <table style='background-color: #f2f3f8; max-width:670px; margin:0 auto;' width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                                                    <tr>
                                                        <td style='height:50px;'>&nbsp;</td>
                                                    </tr>
                                                    <!-- Logo -->
                                                    <tr>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td style='height:20px;'>&nbsp;</td>
                                                    </tr>
                                                    <!-- Email Content -->
                                                    <tr>
                                                        <td>
                                                            <table width='95%' border='0' align='center' cellpadding='0' cellspacing='0' style='max-width:670px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;'>
                                                                <tr>
                                                                    <td style='height:40px;'>&nbsp;</td>
                                                                </tr>
                                                                <!-- Title -->
                                                                <tr>
                                                                    <td style='padding:0 15px; text-align:center;'>
                                                                        <h1 style='color:#1e1e2d; font-weight:300; margin:0;font-size:25px;font-family:Rubik,sans-serif;'>{$name} contacted you <br> through website</h1>
                                                                        <span style='display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; 
                                                                                 width:100px;'></span>
                                                                    </td>
                                                                </tr>
                                                                <!-- Details Table -->
                                                                <tr>
                                                                    <td>
                                                                        <table cellpadding='0' cellspacing='0' style='width: 100%; border: 1px solid #ededed'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style='padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)'>
                                                                                       First Name:
                                                                                    </td>
                                                                                    <td style='padding: 10px; border-bottom: 1px solid #ededed; color: #455056;'>
                                                                                        {$fname}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style='padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)'>
                                                                                        Last Name:
                                                                                    </td>
                                                                                    <td style='padding: 10px; border-bottom: 1px solid #ededed; color: #455056;'>
                                                                                        {$lname}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style='padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)'>
                                                                                        Mobile:
                                                                                    </td>
                                                                                    <td style='padding: 10px; border-bottom: 1px solid #ededed; color: #455056;'>
                                                                                        {$mobile}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style='padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)'>
                                                                                        Email:
                                                                                    </td>
                                                                                    <td style='padding: 10px; border-bottom: 1px solid #ededed; color: #455056;'>
                                                                                        {$email}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style='padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)'>
                                                                                        Mobile:
                                                                                    </td>
                                                                                    <td style='padding: 10px; border-bottom: 1px solid #ededed; color: #455056;'>
                                                                                        {$description}
                                                                                    </td>
                                                                                </tr>
                                                                                
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style='height:40px;'>&nbsp;</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style='height:20px;'>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td style='height: 50px'></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </body>
                                </html>";
            $mail->send();
            echo '1';
        } catch (Exception $e) {
            echo "Message not sent. try again...";
        }
    } else {
        echo "All fields are required!";
    }
}
