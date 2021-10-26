<?php 
    require 'vendor/autoload.php';

    class SendEmail{

        public static function sendMail ($to,$subject,$content){
            $key = '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';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("shawn.ist@gmail.com","Lon-Nix Inc.");
            $email ->setSubject($subject);
            $email ->addTo($to);
            $email ->addContent("text/plain", $content);
            //$email ->addContent("text/html", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid ->send($email);
                return $response;

            }
            catch(Exception $e){
                echo 'Email Exception caught : '. $e->getMessage(). "\n";
                return false;
            }

        }
    }

?>