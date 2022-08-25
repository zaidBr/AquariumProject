<?php
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


    require_once 'phpmailer/Exception.php';
    require_once 'phpmailer/PHPMailer.php';
    require_once 'phpmailer/SMTP.php';

    $mail= new PHPMailer(True);
    $alert='';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $message = $_POST['message'];
        $numPhone = $_POST['phone'];
        $email = $_POST['email'];
        

        try{
           $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
           $mail->isSMTP();                    
            $mail->Host       = 'smtp.gmail.com';                     
            $mail->SMTPAuth   = true;                                  
            $mail->Username   = 'restaurant.aquaproject@gmail.com';                   
            $mail->Password   = 'razine1980@';                              
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           
            $mail->Port       = 587;   

            $mail->setFrom($email,'Nizar');
            $mail->addAddress('restaurant.aquaproject@gmail.com');     
            
            $mail->isHTML(true);                                  
            $mail->Subject = 'Aquarium projet';
            $mail->Body    = "
                    <pre>
                    <h3>Name : {$name}, <br>
                    <h3>Last Name : {$lastName}, <br>
                    <h3>Email :  {$email},<br>
                    <h3>Message :  {$message}          
            ";

             $mail->send();
             $alert = 'send';
    }catch(Exception $e){
        "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
         $alert ='not send'; 
    }
    }