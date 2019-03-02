<?php
    session_start();
    include 'config.php';
    
    if (isset($_POST['submit'])) {
        $_SESSION['result'] = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['g-recaptcha-response'])) {
            
            $inputName = '';
            $inputEmail = '';
            $inputPhone = '';
            $inputMessage = '';

            // Build POST request:
            $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
            $recaptchaSecretKey = "6LeuDJUUAAAAANUtN4bxxySC_yLpVGi4Sj1Oldsg";
            if (isset($_POST['g-recaptcha-response'])) {
                $recaptcha_response = $_POST['g-recaptcha-response'];
            }          
        
            // Make and decode POST request: $recaptchaSecretKey from config.php file
            $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptchaSecretKey . '&response=' . $recaptcha_response);
            $recaptcha = json_decode($recaptcha);

            // Take action based on the score returned:
            if (isset($recaptcha->score) && $recaptcha->score >= 0.5) {
                // Verified - send email
                
                if (isset($_POST['name'])) {
                    $inputName = $_POST['name'];
                }
                if (isset($_POST['email'])) {
                    $inputEmail = $_POST['email'];
                }
                if (isset($_POST['phone'])) {
                    $inputPhone = $_POST['phone'];
                }
                if (isset($_POST['message'])) {
                    $inputMessage = $_POST['message'];
                }
       
                $mail_body = '<html>
                <body style="font-family: Arial, Helvetica, sans-serif;
                                    line-height:1.8em;">
                <p>Hello '.$siteEmailRecipient.', <br> A message with the following information was sent via the contact form on the harptisha.com website:</p>
                <p>Name: '.$inputName.'<br>
                Email: '.$inputEmail.'<br>
                Phone: '.$inputPhone.'<br>
                Message: '.$inputMessage.'<br>
                <br>
                Have a nice day!<br>
                harptisha.com
                </p>
                </body>
                </html>';
            
                $subject = "Message from harptisha.com contact form";
                $headers = "From: harptisha.com" . "\r\n";
                $headers .= "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                //Error Handling for PHPMailer
                if(!mail($email, $subject, $mail_body, $headers)){
                    $_SESSION['result'] = "Email failed to send.";
                }
                else{
                    $_SESSION['result'] = "Email sent!";
                }
                       
            } else {
                // Not verified - show form error
                $_SESSION['result'] = 'Form failed to send. Please email harp@harptisha.com.';
            }      
        }
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google reCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LeuDJUUAAAAACYDCS8QxDSVOcRelxucr2sKq8E2"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LeuDJUUAAAAACYDCS8QxDSVOcRelxucr2sKq8E2', {action: 'homepage'}).then(function(token) {
                // pass the token to the backend script for verification

                // add token value to form for PHP verification
                document.getElementById('g-recaptcha-response').value = token;
            });
        });
    </script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:100,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:100,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Tisha Murvihill-Contact</title>
</head>
<body>
<?php include 'php/reusables/hero.php' ?>

    <div class="contact">        
        <div class="contact__text">
            <p>Tisha Murvihill provides a relaxed, but goal-oriented atmosphere for your harp studies. She would love to hear about your harp journey whether it is years in the making or just about to begin!</p>
        </div>
        <div class="contact__phone">
            <p>
                Contact Tisha below or<br>at <a href="mailto: harp@harptisha.com">harp@harptisha.com</a>
            </p> 
        </div>                      
        <div class="contact__form">
            <form action="contact.php" name='submit' method="post" id='recaptchaForm'>
                <div class="contact__form--title">
                    <?php if(isset($_SESSION['result'])) {echo $_SESSION['result'].'<br>'; unset($_SESSION['result']);} else {echo '<p>Contact Tisha</p>';} ?> 
                </div>
                
                <div class="contact__form--userInputs">
                    <div class="contact__form--userInputs-item">
                        <label for="name">Name:</label>
                        <input type="text" name='name'>
                    </div>
                    <div class="contact__form--userInputs-item">
                        <label for="email">Email:</label>
                        <input type="email" name='email'>
                    </div>
                    <div class="contact__form--userInputs-item">
                        <label for="phone">Phone:</label>
                        <input type="text" name='phone' placeholder='optional'><br>
                    </div>
                    <label for="message">Message:</label>
                    <textarea rows="6" name="message"></textarea><br>
                    <!-- reCaptcha fields -->
                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                    <input type="hidden" name="action" value="validate_captcha">
                    <!-- end reCaptcha fields -->
                    <button type='submit' name='submit'>Submit</button>
                </div>
            </form>
        </div>        
                      
    </div>

</body>
</html>