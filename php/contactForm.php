<?php
    if(!empty($_POST)){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $toEmail = 'abdurrahman.abid@outlook.com';
        $emailSubject = 'New email from portfolio website';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $body = "<p>You have received a message from your portfolio website from " .$name. ".</p><p>" . $message . "</p>";

        // $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
        // $body = join(PHP_EOL, $bodyParagraphs);

        // mail($toEmail, $emailSubject, $body, $headers);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            echo "success";
        } else {
            echo 'Oops, something went wrong. Please try again later';
        }
    }
?>