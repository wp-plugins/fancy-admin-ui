<?php
  header("Content-type: text/css; charset: UTF-8");

  require_once('../../../../wp-config.php');

  if(get_option( 'fau_primary_color') != ""):
    $fau_primary    = get_option( 'fau_primary_color');
  else :
    $fau_primary    = "#3498db";
  endif;
  if(get_option( 'fau_secondary_color') != ""):
    $fau_secondary  = get_option( 'fau_secondary_color');
  else :
    $fau_secondary    = "#2581bf";
  endif;
?>

body, html {
background:<?php echo $fau_primary; ?>
}

.login #login_error a,.login label,.login #backtoblog a,.login #nav a {
color:#FFF
}

.login label,.login #nav,.login #backtoblog {
display:block;
text-align:center
}

.login #nav a:hover,.login #backtoblog a:hover {
color:#FFF;
text-decoration:underline
}

.login form .input,.login input[type=text] {
margin-top:10px;
display:block
}

.wp-core-ui .button-primary, .wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover {
border-color: transparent;
-webkit-box-shadow: none;
box-shadow: none;
}

.wp-core-ui .button.button-large:hover {
background: #F1F1F1;
}

.login form .forgetmenot {
float:none
}

#loginform,.login #login_error,.login .message {
background:<?php echo $fau_secondary; ?>;
color:#FFF
}

#loginform {
padding-bottom:25px
}

.wp-core-ui .button-group.button-large .button,.wp-core-ui .button.button-large {
background:#FFF;
color:#333;
height:auto;
font-size:18px;
margin-top:15px;
padding:10px 0;
width:100%
}
