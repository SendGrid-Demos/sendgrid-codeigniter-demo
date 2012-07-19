<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Protocol
|--------------------------------------------------------------------------
|
| The mail sending protocol (mail, sendmail, or smtp).
*/
$config['protocol']	= 'smtp';

/*
|--------------------------------------------------------------------------
| SMTP Host
|--------------------------------------------------------------------------
|
| The address of the SMTP server you're sending email through.
*/
$config['smtp_host']	= 'smtp.sendgrid.net';

/*
|--------------------------------------------------------------------------
| SMTP Username
|--------------------------------------------------------------------------
|
| The username you use to authenticate with your SMTP server.  In our case,
| that's your sendgrid username or one of the credentials you setup under
| the credentials page (http://sendgrid.com/credentials).
*/
$config['smtp_user']	= 'your_sendgrid_username';

/*
|--------------------------------------------------------------------------
| SMTP Password
|--------------------------------------------------------------------------
|
| The password you use to authenticate with your SMTP server.  In our case,
| that's your sendgrid password or one of the credentials you setup under
| the credentials page (http://sendgrid.com/credentials).
*/
$config['smtp_pass']	= 'your_sendgrid_password';
