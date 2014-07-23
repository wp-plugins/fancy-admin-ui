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
html {
background:#FFF
}

a,
input[type=checkbox]:checked:before,
.view-switch a.current:before {
color:<?php echo $fau_primary; ?>
}

a:hover {
color:<?php echo $fau_secondary; ?>
}

#adminmenu {
margin:0
}

#adminmenu,#adminmenu .wp-submenu,#adminmenuback,#adminmenuwrap,/* Sub Menu */
#adminmenu .wp-has-current-submenu .wp-submenu,#adminmenu .wp-has-current-submenu .wp-submenu.sub-open,#adminmenu .wp-has-current-submenu.opensub .wp-submenu,#adminmenu a.wp-has-current-submenu:focus+.wp-submenu,.no-js li.wp-has-current-submenu:hover .wp-submenu {
background:#f5f5f5
}

#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head,#adminmenu .wp-menu-arrow,#adminmenu .wp-menu-arrow div,#adminmenu li.current a.menu-top,#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,.folded #adminmenu li.current.menu-top,.folded #adminmenu li.wp-has-current-submenu,/* Hover actions */
#adminmenu li.menu-top:hover,#adminmenu li.opensub>a.menu-top,#adminmenu li>a.menu-top:focus {
background:<?php echo $fau_primary; ?>;
background:#FFF
}

#adminmenu .opensub .wp-submenu li.current a,#adminmenu .wp-submenu li.current,#adminmenu .wp-submenu li.current a,#adminmenu .wp-submenu li.current a:focus,#adminmenu .wp-submenu li.current a:hover,#adminmenu a.wp-has-current-submenu:focus+.wp-submenu li.current a,#adminmenu .wp-submenu .wp-submenu-head,/* Dashicons */
#adminmenu .current div.wp-menu-image:before,#adminmenu .wp-has-current-submenu div.wp-menu-image:before,#adminmenu a.current:hover div.wp-menu-image:before,#adminmenu a.wp-has-current-submenu:hover div.wp-menu-image:before,#adminmenu li.wp-has-current-submenu:hover div.wp-menu-image:before, #adminmenu li:hover div.wp-menu-image:before {
color:<?php echo $fau_primary; ?>
}

#adminmenu li.wp-menu-separator {
display: none
}

#adminmenu .wp-submenu-head,#adminmenu a.menu-top {
padding:7px 0
}

.folded #adminmenu .wp-submenu-head,.folded #adminmenu a.menu-top {
padding:5px 0
}

#adminmenu .wp-not-current-submenu .wp-submenu,.folded #adminmenu .wp-has-current-submenu .wp-submenu {
padding:10px
}

#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu div.wp-menu-name {
color:#FFF;
color:<?php echo $fau_primary; ?>
}

ul#adminmenu a.wp-has-current-submenu:after,ul#adminmenu>li.current>a.current:after,#adminmenu li.wp-has-submenu.wp-not-current-submenu.opensub:hover:after {
display:none
}

#adminmenu li.menu-top {
border-bottom:1px solid #e4e4e4
}

#adminmenu div.wp-menu-name {
color:#666
}

.wrap h2 {
font-size:34px;
font-weight:100;
padding:30px 25px 24px 0
}

.wrap .add-new-h2,.wrap .add-new-h2:active {
background:<?php echo $fau_primary; ?>;
color:#FFF;
top:-8px
}

.wrap .add-new-h2:hover {
background:<?php echo $fau_secondary; ?>
}

#titlediv #title-prompt-text {
font-size:1.2em;
font-weight:100
}

div.updated {
border:1px solid #e1e1e1;
border-left:5px solid <?php echo $fau_primary; ?>;
-webkit-box-shadow:none;
box-shadow:none
}

input[type=email],input[type=number],input[type=password],input[type=search],input[type=tel],input[type=text],input[type=url],select,textarea {
box-shadow:none
}

.postbox {
border:1px solid #e1e1e1
}

.menu.ui-sortable .menu-item-handle,.meta-box-sortables.ui-sortable .hndle {
background:#f5f5f5
}

#major-publishing-actions {
background:#FFF;
padding:0
}

#delete-action {
float:none;
padding:15px 0;
text-align:center
}

#delete-action a {
text-decoration:underline
}

#publishing-action {
float:none;
display:block;
width:100%
}

#publishing-action .spinner {
width:100%;
background-position:top center;
padding:5px 0
}

#publishing-action #publish {
float:none;
font-size:16px;
height:auto;
padding:10px;
width:100%
}

.wp-core-ui .button,.wp-core-ui .button-primary,.wp-core-ui .button-secondary {
-moz-border-radius:0;
-webkit-border-radius:0;
border-radius:0;
box-shadow:none;
border:0
}

.wp-core-ui .button,.wp-core-ui .button-secondary {
background:#e4e4e4
}

.wp-core-ui .button:hover,.wp-core-ui .button-secondary:hover,.wp-core-ui .button-primary {
background:<?php echo $fau_primary; ?>;
color:#FFF
}

.wp-core-ui .button:hover span.wp-media-buttons-icon:before,.wp-core-ui .button-secondary:hover span.wp-media-buttons-icon:before {
color:#FFF
}

.wp-media-buttons .insert-media {
font-size:12px
}

.wp-media-buttons .add_media span.wp-media-buttons-icon:before {
font-size:14px!important
}

div.mce-toolbar-grp,.html-active .switch-html,.tmce-active .switch-tmce {
background:#FFF!important
}

#acf-col-right {
display:none
}

#acf-col-left {
margin:0!important
}

.vc_navbar.subnav-fixed {
top:40px!important
}

.composer-switch a,.composer-switch a:visited,.composer-switch a.wpb_switch-to-front-composer,.composer-switch a:visited.wpb_switch-to-front-composer,.composer-switch .logo-icon {
background-color:<?php echo $fau_primary; ?>!important
}

.composer-switch .vc-spacer, .composer-switch a.wpb_switch-to-composer:hover, .composer-switch a:visited.wpb_switch-to-composer:hover, .composer-switch a.wpb_switch-to-front-composer:hover, .composer-switch a:visited.wpb_switch-to-front-composer:hover {
background-color: <?php echo $fau_secondary; ?>!important
}
