<?php
/*
require_once('../../recaptcha/recaptchalib.php');
// Get a key from https://www.google.com/recaptcha/admin/create
$publickey = "6LcNIfMSAAAAAPfa0CM3zz1crBpHY5ri9LRUGuJN";
$privatekey = "6LcNIfMSAAAAANJh3g75QnrYbVSFmkvvjYfhPeQ5";
exit;
	echo 'Message has been sent';*/
<?php
  require_once('../../recaptcha/recaptchalib.php');
  $privatekey = "6Le06PYSAAAAAOh0Tf0JjBPDeIrXzUKXxxmkDfSN";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
  }
  ?>
	
?>