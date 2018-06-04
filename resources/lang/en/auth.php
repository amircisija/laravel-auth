<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed'   => 'These credentials do not match our records.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

    // Activation items
    'sentEmail'        => 'We have sent an email to :email.',
    'clickInEmail'     => 'Kliknite na link koji ste dobili na Vašu email adresu.',
    'anEmailWasSent'   => 'Za aktivaciju naloga potrebno je kliknuti na link koji je poslan na vašu adresu :email.',
    'clickHereResend'  => 'Pošalji ponovo aktivacijski email',
    'successActivated' => 'Vaš nalog je uspješno aktiviran.',
    'unsuccessful'     => 'Your account could not be activated; please try again.',
    'notCreated'       => 'Your account could not be created; please try again.',
    'tooManyEmails'    => 'Too many activation emails have been sent to :email. <br />Please try again in <span class="label label-danger">:hours hours</span>.',
    'regThanks'        => 'Poštovani, hvala Vam za registraciju na Coinexpand.net.',
    'invalidToken'     => 'Invalid activation token. ',
    'activationSent'   => 'Activation email sent. ',
    'alreadyActivated' => 'Already activated. ',

    // Labels
    'whoops'          => 'Greška! ',
    'someProblems'    => 'Došlo je do greške prilikom registracije',
    'email'           => 'E-Mail Address',
    'password'        => 'Password',
    'rememberMe'      => ' Remember Me',
    'login'           => 'Login',
    'forgot'          => 'Forgot Your Password?',
    'forgot_message'  => 'Password Troubles?',
    'name'            => 'Username',
    'first_name'      => 'First Name',
    'last_name'       => 'Last Name',
    'confirmPassword' => 'Confirm Password',
    'register'        => 'Register',

    // Placeholders
    'ph_name'          => 'Username',
    'ph_email'         => 'E-mail Address',
    'ph_firstname'     => 'First Name',
    'ph_lastname'      => 'Last Name',
    'ph_password'      => 'Password',
    'ph_password_conf' => 'Confirm Password',

    // User flash messages
    'sendResetLink' => 'Send Password Reset Link',
    'resetPassword' => 'Reset Password',
    'loggedIn'      => 'You are logged in!',

    // email links
    'pleaseActivate'    => 'Please activate your account.',
    'clickHereReset'    => 'Click here to reset your password: ',
    'clickHereActivate' => 'Click here to activate your account: ',

    // Validators
    'userNameTaken'    => 'Korisničko ime je u upotrebi',
    'userNameRequired' => 'Korisničko ime je obavezno',
    'fNameRequired'    => 'First Name is required',
    'lNameRequired'    => 'Last Name is required',
    'emailRequired'    => 'Email is required',
    'emailInvalid'     => 'Email is invalid',
    'passwordRequired' => 'Password is required',
    'PasswordMin'      => 'Password needs to have at least 6 characters',
    'PasswordMax'      => 'Password maximum length is 20 characters',
    'captchaRequire'   => 'Captcha is required',
    'CaptchaWrong'     => 'Google recaptha je pogrešno unesena, molimo Vas pokušajte ponovo.',
    'roleRequired'     => 'User role is required.',

];
