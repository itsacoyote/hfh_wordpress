<?php
 
    session_start();
    
    $err = '';
    $success = '';
    
    if( isset($_POST['action']) && $_POST['action']=='email-to-friend' ) {
        
        $to = $_POST['to'];
        $sender = $_POST['sender'];
        $your_email = $_POST['your_email'];
        $subject = $_POST['subject'];
        
        
        if( $to == "" || $sender == "" || $your_email == "" || $subject == "" ) {
            echo '0';
        } else if(!filter_var($to, FILTER_VALIDATE_EMAIL)) {
            echo '1';
        } else if(!filter_var($your_email, FILTER_VALIDATE_EMAIL)) {
            echo '1';
        } else {
            
            $body = $_SESSION['message'];
            $title = $_SESSION['title'];
            $site_url = $_SESSION['site_url'];
        
            $message = '
            <html>
            <head>
                <title>'. $title .'</title>
            </head>
            <body>
                <h2>'. $title .'</h2.
                '. $body .'
                <p>Having trouble viewing this email? <a href="'. $site_url. '">Click here</a>.</p>
            </body>
            </html>
            ';
            $headers = 'From: '. $sender .' <'. $your_email .'>' . "\r\n";
            
            $email = mail( $to, $subject, $message, $headers );
            if( $email ) {
                echo '2';
            }
        
        }
    }
 
?>
