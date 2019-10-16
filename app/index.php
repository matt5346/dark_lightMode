<?php
if(isset($_POST["submit1"]))
{
  header('Location:index_redirect.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>
<body>



    <main>
 

          <form class="registration_form" action="" method="post">

            <div class="registration_form_wrapper">
              <input class="registration_form_input" type="email" name="email-field" id="id-email-field" onkeyup="this.setAttribute('value', this.value);" value="" required>
              <span class="registration_form_input-check"></span>
              <div class="registration_form_wrapper-label">
                <label class="registration_form_label" for="id-email-field">Write your email</label>
              </div>
            </div>
            <div class="registration_form_wrapper">
              <input class="registration_form_input" type="password" name="password-field" id="id-password-field" onkeyup="this.setAttribute('value', this.value);" value="" minlength="6" required>
              <span class="registration_form_input-check"></span>
              <div class="registration_form_wrapper-label">
                <label class="registration_form_label" for="id-password-field">Write your password</label>
              </div>
              <p class="registration_form_error">Ваш пароль должен быть минимум из 6 символов</p>
            </div>
            <button class="registration_form_button registration_form_button-submit" type="submit" name="submit1">Sign in</button>
 
          </form>
        </section>
      </main>


<script src="./jquery.min.js"></script>
<script src="./anime.min.js"></script>
    <script src="./js/common.js"></script>
</body>
</html>