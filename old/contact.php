<!DOCTYPE HTML>

<?php

    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/php";

    $message_sent = false;

    if(isset($_POST['email']) && $_POST['email'] != '') {
        
        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
            
            // submit the form
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $message = $_POST['message'];


            $to = "josh@joshuaroberts.dev";
            $subject = "DEV: Hello from " . $userName;

            $nameAndEmail = $userName." <".$userEmail.">";

            $headers = "From: " . $nameAndEmail . PHP_EOL .
                "Reply-To: " . $nameAndEmail . PHP_EOL .
                "X-Mailer: PHP/" . phpversion();

            mail($to, $subject, $message, $headers);
            
            $message_sent = true;   
        }
    }
?>

<html>

<head>
    <title>Joshua Roberts | Contact</title>
    <link rel="stylesheet", href="/css/main.css"/>
    <link rel="stylesheet", type="text/css" href="/css/bootstrap.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png"/>
</head>

<body class="background">
    <?php include($IPATH."/headernav.php"); ?>
    
    <div class="text-body">
        
        <p>Have a question? Want to discuss an interesting opportunity? Just want to get in touch?</p>
        <p>Send me an email using the form below, or feel free to email me directly at <a href="mailto:josh@joshuaroberts.dev">josh@joshuaroberts.dev</a></p>
        <br>
        
        <?php if($message_sent) { ?>
            <h3 class="contact-form-result">Thanks! We'll be in touch</h3>
        <?php } else { ?>
            <form action="contact.php" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" class="form-control" required><br>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" class="form-control" required><br>
                </div>
                <!--
                <div class="form-group">
                    <label for="subject">Subject:</label><br>
                    <input type="text" id="subject" name="subject" class="form-control"><br>
                </div>
                -->
                <div class="form-group">
                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" rows=12 class="form-control" required></textarea><br>
                </div>
                <button class="btn btn-primary">Send</button>
            </form>
        <?php } ?>
        
    </div>
    
</body>

</html>