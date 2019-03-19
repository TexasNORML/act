<?php 
/*************************************************
## Typography
*************************************************/

function act_custom_styling() { ?>

<style type="text/css">

<?php $tipigrof = ot_get_option( 'tipigrof', array() ); ?> 
<?php if($tipigrof) { ?>
body{ 
<?php if($tipigrof['font-color'])     { echo 'color:          '.$tipigrof['font-color'].'';      }else{ echo '';} ?>;
<?php if($tipigrof['font-family'])    { echo 'font-family:    '.$tipigrof['font-family'].'';     }else{ echo '';} ?>;
<?php if($tipigrof['font-size'])      { echo 'font-size:      '.$tipigrof['font-size'].'';       }else{ echo '';} ?>;
<?php if($tipigrof['font-style'])     { echo 'font-style:     '.$tipigrof['font-style'].'';      }else{ echo '';} ?>;
<?php if($tipigrof['font-variant'])   { echo 'font-variant:   '.$tipigrof['font-variant'].'';    }else{ echo '';} ?> ;
<?php if($tipigrof['font-weight'])    { echo 'font-weight:    '.$tipigrof['font-weight'].'';     }else{ echo '';} ?> ;
<?php if($tipigrof['letter-spacing']) { echo 'letter-spacing: '.$tipigrof['letter-spacing'].'';  }else{ echo '';} ?> ;
<?php if($tipigrof['line-height'])    { echo 'line-height:    '.$tipigrof['line-height'].'' ;    }else{ echo '';} ?> ;
<?php if($tipigrof['text-decoration']){ echo 'text-decoration:'.$tipigrof['text-decoration'].''; }else{ echo '';} ?> ;
<?php if($tipigrof['text-transform']) { echo 'text-transform: '.$tipigrof['text-transform'].'' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $h1tipigrof = ot_get_option( 'h1_tipigrof', array() ); ?> 
<?php if($h1tipigrof) { ?>
h1{ 
<?php if($h1tipigrof['font-color'])     { echo 'color:          '.$h1tipigrof['font-color'].' !important';      }else{ echo '';} ?>;
<?php if($h1tipigrof['font-family'])    { echo 'font-family:    '.$h1tipigrof['font-family'].' !important';     }else{ echo '';} ?>;
<?php if($h1tipigrof['font-size'])      { echo 'font-size:      '.$h1tipigrof['font-size'].' !important';       }else{ echo '';} ?>;
<?php if($h1tipigrof['font-style'])     { echo 'font-style:     '.$h1tipigrof['font-style'].' !important';      }else{ echo '';} ?>;
<?php if($h1tipigrof['font-variant'])   { echo 'font-variant:   '.$h1tipigrof['font-variant'].' !important';    }else{ echo '';} ?> ;
<?php if($h1tipigrof['font-weight'])    { echo 'font-weight:    '.$h1tipigrof['font-weight'].' !important';     }else{ echo '';} ?> ;
<?php if($h1tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h1tipigrof['letter-spacing'].' !important';  }else{ echo '';} ?> ;
<?php if($h1tipigrof['line-height'])    { echo 'line-height:    '.$h1tipigrof['line-height'].' !important' ;    }else{ echo '';} ?> ;
<?php if($h1tipigrof['text-decoration']){ echo 'text-decoration:'.$h1tipigrof['text-decoration'].' !important'; }else{ echo '';} ?> ;
<?php if($h1tipigrof['text-transform']) { echo 'text-transform: '.$h1tipigrof['text-transform'].' !important' ; }else{ echo '';} ?> ;
}
<?php } ?>



<?php $h2tipigrof = ot_get_option( 'h2_tipigrof', array() ); ?> 
<?php if($h2tipigrof) { ?>
h2{ 
<?php if($h2tipigrof['font-color'])     { echo 'color:          '.$h2tipigrof['font-color'].' !important';      }else{ echo '';} ?>;
<?php if($h2tipigrof['font-family'])    { echo 'font-family:    '.$h2tipigrof['font-family'].' !important';     }else{ echo '';} ?>;
<?php if($h2tipigrof['font-size'])      { echo 'font-size:      '.$h2tipigrof['font-size'].' !important';       }else{ echo '';} ?>;
<?php if($h2tipigrof['font-style'])     { echo 'font-style:     '.$h2tipigrof['font-style'].' !important';      }else{ echo '';} ?>;
<?php if($h2tipigrof['font-variant'])   { echo 'font-variant:   '.$h2tipigrof['font-variant'].' !important';    }else{ echo '';} ?> ;
<?php if($h2tipigrof['font-weight'])    { echo 'font-weight:    '.$h2tipigrof['font-weight'].' !important';     }else{ echo '';} ?> ;
<?php if($h2tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h2tipigrof['letter-spacing'].' !important';  }else{ echo '';} ?> ;
<?php if($h2tipigrof['line-height'])    { echo 'line-height:    '.$h2tipigrof['line-height'].' !important' ;    }else{ echo '';} ?> ;
<?php if($h2tipigrof['text-decoration']){ echo 'text-decoration:'.$h2tipigrof['text-decoration'].' !important'; }else{ echo '';} ?> ;
<?php if($h2tipigrof['text-transform']) { echo 'text-transform: '.$h2tipigrof['text-transform'].' !important' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $h3tipigrof = ot_get_option( 'h3_tipigrof', array() ); ?> 
<?php if($h3tipigrof) { ?>
h3{ 
<?php if($h3tipigrof['font-color'])     { echo 'color:          '.$h3tipigrof['font-color'].' !important';      }else{ echo '';} ?>;
<?php if($h3tipigrof['font-family'])    { echo 'font-family:    '.$h3tipigrof['font-family'].' !important';     }else{ echo '';} ?>;
<?php if($h3tipigrof['font-size'])      { echo 'font-size:      '.$h3tipigrof['font-size'].' !important';       }else{ echo '';} ?>;
<?php if($h3tipigrof['font-style'])     { echo 'font-style:     '.$h3tipigrof['font-style'].' !important';      }else{ echo '';} ?>;
<?php if($h3tipigrof['font-variant'])   { echo 'font-variant:   '.$h3tipigrof['font-variant'].' !important';    }else{ echo '';} ?> ;
<?php if($h3tipigrof['font-weight'])    { echo 'font-weight:    '.$h3tipigrof['font-weight'].' !important';     }else{ echo '';} ?> ;
<?php if($h3tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h3tipigrof['letter-spacing'].' !important';  }else{ echo '';} ?> ;
<?php if($h3tipigrof['line-height'])    { echo 'line-height:    '.$h3tipigrof['line-height'].' !important' ;    }else{ echo '';} ?> ;
<?php if($h3tipigrof['text-decoration']){ echo 'text-decoration:'.$h3tipigrof['text-decoration'].' !important'; }else{ echo '';} ?> ;
<?php if($h3tipigrof['text-transform']) { echo 'text-transform: '.$h3tipigrof['text-transform'].' !important' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $h4tipigrof = ot_get_option( 'h4_tipigrof', array() ); ?> 
<?php if($h4tipigrof) { ?>
h4{ 
<?php if($h4tipigrof['font-color'])     { echo 'color:          '.$h4tipigrof['font-color'].' !important';      }else{ echo '';} ?>;
<?php if($h4tipigrof['font-family'])    { echo 'font-family:    '.$h4tipigrof['font-family'].' !important';     }else{ echo '';} ?>;
<?php if($h4tipigrof['font-size'])      { echo 'font-size:      '.$h4tipigrof['font-size'].' !important';       }else{ echo '';} ?>;
<?php if($h4tipigrof['font-style'])     { echo 'font-style:     '.$h4tipigrof['font-style'].' !important';      }else{ echo '';} ?>;
<?php if($h4tipigrof['font-variant'])   { echo 'font-variant:   '.$h4tipigrof['font-variant'].' !important';    }else{ echo '';} ?> ;
<?php if($h4tipigrof['font-weight'])    { echo 'font-weight:    '.$h4tipigrof['font-weight'].' !important';     }else{ echo '';} ?> ;
<?php if($h4tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h4tipigrof['letter-spacing'].' !important';  }else{ echo '';} ?> ;
<?php if($h4tipigrof['line-height'])    { echo 'line-height:    '.$h4tipigrof['line-height'].' !important' ;    }else{ echo '';} ?> ;
<?php if($h4tipigrof['text-decoration']){ echo 'text-decoration:'.$h4tipigrof['text-decoration'].' !important'; }else{ echo '';} ?> ;
<?php if($h4tipigrof['text-transform']) { echo 'text-transform: '.$h4tipigrof['text-transform'].' !important' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $h5tipigrof = ot_get_option( 'h5_tipigrof', array() ); ?> 
<?php if($h5tipigrof) { ?>
h5{ 
<?php if($h5tipigrof['font-color'])     { echo 'color:          '.$h5tipigrof['font-color'].' !important';      }else{ echo '';} ?>;
<?php if($h5tipigrof['font-family'])    { echo 'font-family:    '.$h5tipigrof['font-family'].' !important';     }else{ echo '';} ?>;
<?php if($h5tipigrof['font-size'])      { echo 'font-size:      '.$h5tipigrof['font-size'].' !important';       }else{ echo '';} ?>;
<?php if($h5tipigrof['font-style'])     { echo 'font-style:     '.$h5tipigrof['font-style'].' !important';      }else{ echo '';} ?>;
<?php if($h5tipigrof['font-variant'])   { echo 'font-variant:   '.$h5tipigrof['font-variant'].' !important';    }else{ echo '';} ?> ;
<?php if($h5tipigrof['font-weight'])    { echo 'font-weight:    '.$h5tipigrof['font-weight'].' !important';     }else{ echo '';} ?> ;
<?php if($h5tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h5tipigrof['letter-spacing'].' !important';  }else{ echo '';} ?> ;
<?php if($h5tipigrof['line-height'])    { echo 'line-height:    '.$h5tipigrof['line-height'].' !important' ;    }else{ echo '';} ?> ;
<?php if($h5tipigrof['text-decoration']){ echo 'text-decoration:'.$h5tipigrof['text-decoration'].' !important'; }else{ echo '';} ?> ;
<?php if($h5tipigrof['text-transform']) { echo 'text-transform: '.$h5tipigrof['text-transform'].' !important' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $h6tipigrof = ot_get_option( 'h6_tipigrof', array() ); ?> 
<?php if($h6tipigrof) { ?>
h6{ 
<?php if($h6tipigrof['font-color'])     { echo 'color:          '.$h6tipigrof['font-color'].'!important';      }else{ echo '';} ?>;
<?php if($h6tipigrof['font-family'])    { echo 'font-family:    '.$h6tipigrof['font-family'].'!important';     }else{ echo '';} ?>;
<?php if($h6tipigrof['font-size'])      { echo 'font-size:      '.$h6tipigrof['font-size'].'!important';       }else{ echo '';} ?>;
<?php if($h6tipigrof['font-style'])     { echo 'font-style:     '.$h6tipigrof['font-style'].'!important';      }else{ echo '';} ?>;
<?php if($h6tipigrof['font-variant'])   { echo 'font-variant:   '.$h6tipigrof['font-variant'].'!important';    }else{ echo '';} ?> ;
<?php if($h6tipigrof['font-weight'])    { echo 'font-weight:    '.$h6tipigrof['font-weight'].'!important';     }else{ echo '';} ?> ;
<?php if($h6tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h6tipigrof['letter-spacing'].'!important';  }else{ echo '';} ?> ;
<?php if($h6tipigrof['line-height'])    { echo 'line-height:    '.$h6tipigrof['line-height'].'!important' ;    }else{ echo '';} ?> ;
<?php if($h6tipigrof['text-decoration']){ echo 'text-decoration:'.$h6tipigrof['text-decoration'].'!important'; }else{ echo '';} ?> ;
<?php if($h6tipigrof['text-transform']) { echo 'text-transform: '.$h6tipigrof['text-transform'].'!important' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $ptipigrof = ot_get_option( 'p_tipigrof', array() ); ?> 
<?php if($ptipigrof) { ?>
p{ 
<?php if($ptipigrof['font-color'])     { echo 'color:          '.$ptipigrof['font-color'].'!important';      }else{ echo '';} ?>;
<?php if($ptipigrof['font-family'])    { echo 'font-family:    '.$ptipigrof['font-family'].'!important';     }else{ echo '';} ?>;
<?php if($ptipigrof['font-size'])      { echo 'font-size:      '.$ptipigrof['font-size'].'!important';       }else{ echo '';} ?>;
<?php if($ptipigrof['font-style'])     { echo 'font-style:     '.$ptipigrof['font-style'].'!important';      }else{ echo '';} ?>;
<?php if($ptipigrof['font-variant'])   { echo 'font-variant:   '.$ptipigrof['font-variant'].'!important';    }else{ echo '';} ?> ;
<?php if($ptipigrof['font-weight'])    { echo 'font-weight:    '.$ptipigrof['font-weight'].'!important';     }else{ echo '';} ?> ;
<?php if($ptipigrof['letter-spacing']) { echo 'letter-spacing: '.$ptipigrof['letter-spacing'].'!important';  }else{ echo '';} ?> ;
<?php if($ptipigrof['line-height'])    { echo 'line-height:    '.$ptipigrof['line-height'].'!important' ;    }else{ echo '';} ?> ;
<?php if($ptipigrof['text-decoration']){ echo 'text-decoration:'.$ptipigrof['text-decoration'].'!important'; }else{ echo '';} ?> ;
<?php if($ptipigrof['text-transform']) { echo 'text-transform: '.$ptipigrof['text-transform'].'!important' ; }else{ echo '';} ?> ;
}
<?php } ?>

<?php if(!is_front_page() || is_home() ) { ?>
.container-wide {
    padding-left: 0 !important;
    padding-right: 0 !important;
}

.navbar {
    padding: 0 !important;
    background-color: #000 !important;
}

#donate-homepage.donate{
	display:inherit !important;
}

@media (max-width: 780px) {
#donate-homepage.donate{
	display:none !important;
}
}

.navbar-brand-home	img {
    width: 60px;
    height: auto;
    margin-top: -.4em;
}
<?php if(is_admin_bar_showing()){ ?>
#template-header .navbar-default{
	margin-top:32px;
}
<?php } else { ?>
#template-header .navbar-default{
	margin-top:0;
}
<?php } ?>
<?php } ?>

/* Logo Size */
.navbar-brand-home img {
    width: <?php echo ot_get_option( 'act_logo_first_size' ); ?>px;
}

.top-nav-collapse .navbar-brand-home img {
    width: <?php echo ot_get_option( 'act_logo_second_size' ); ?>px;
}

/* Header Colors */
.top-nav-collapse {
  background: <?php echo ot_get_option( 'act_header_background' ); ?>;
}

.page-template-donors .navbar{
  background: <?php echo ot_get_option( 'act_header_background' ); ?>;
}

.nav .dropdown-menu {
    background: <?php echo ot_get_option( 'act_header_background' ); ?>;
}

.navbar-custom li a {
    color: <?php echo ot_get_option( 'act_header_font' ); ?>;
}

.top-nav-collapse li a:hover, .top-nav-collapse li.active a, .top-nav-collapse li.active-subpage a{
	background: <?php echo ot_get_option( 'act_header_hover_bg' ); ?> !important;
    color: <?php echo ot_get_option( 'act_header_hover_font' ); ?> !important;
}

@media (min-width: 780px){
.navbar-custom .nav li a:hover, .navbar-custom .nav li a:focus, .navbar-custom .nav li.active a {
    color: <?php echo ot_get_option( 'act_header_hover_font' ); ?> !important
}
}
/* Header Donate Button */
.donate.bg-brand-tertiary {
    background: <?php echo ot_get_option( 'act_donate_button_color' ); ?>;
}

.donate.bg-brand-tertiary:hover {
    background: <?php echo ot_get_option( 'act_donate_button_hover_color' ); ?>;
}


/* Footer Colors */
.footer-top {
    background-color: <?php echo ot_get_option( 'act_footertop_bgcolor' ); ?>;
}

.footer-bottom {
    background-color: <?php echo ot_get_option( 'act_footerbottom_bgcolor' ); ?>;
}

#footer small {
    color: <?php echo ot_get_option( 'act_footerbottom_fontcolor' ); ?>;
}

/* Main Colors */
.tribe-events-button, #tribe-events .tribe-events-button {
    background-color: <?php echo ot_get_option( 'act_main_color' ); ?> !important;
}

.bg-brand-tertiary {
  background: <?php echo ot_get_option( 'act_main_color' ); ?>;
}

.progress-bar-tertiary {
  background-color: <?php echo ot_get_option( 'act_main_color' ); ?>;
}

.panel-campaign #cf_percent_bar {
background-color: <?php echo ot_get_option( 'act_main_color' ); ?>;
}

.tab-down-tertiary {
  background-color: <?php echo ot_get_option( 'act_main_color' ); ?>;
}

.tab-down-tertiary:before {
  background-image: radial-gradient(circle at 0% 100%, rgba(204, 0, 0, 0) 14px, <?php echo ot_get_option( 'act_main_color' ); ?> 15px);
}

.tab-down-tertiary:after {
  background-image: radial-gradient(circle at 100% 100%, rgba(204, 0, 0, 0) 14px, <?php echo ot_get_option( 'act_main_color' ); ?> 15px);
}

[id^="blog"] .post-details .fa {
  color: <?php echo ot_get_option( 'act_main_color' ); ?>;
}

.progress-bar-tertiary {
  background-color: <?php echo ot_get_option( 'act_main_color' ); ?>;
}

.donate:hover, .btn-tertiary:hover, .btn-tertiary:active, .btn-tertiary:focus {
  background-color: <?php echo ot_get_option( 'act_main_color_hover' ); ?>;
}

.btn i.text-primary {
  color: <?php echo ot_get_option( 'act_second_color' ); ?> !important;
}

.bg-brand-primary {
  background: <?php echo ot_get_option( 'act_second_color' ); ?>;
}

.btn-primary {
  border: 1px solid <?php echo ot_get_option( 'act_second_color' ); ?>;
}

 .btn-primary {
  background-color: <?php echo ot_get_option( 'act_second_color' ); ?>;
}


.footer-top .col-md-3 ul li:before {
  color: <?php echo ot_get_option( 'act_second_color' ); ?> !important;
}

.btn i.text-primary:hover {
  color: <?php echo ot_get_option( 'act_second_color_hover' ); ?> !important;
}

.btn-primary:hover, .btn-primary:active, .btn-primary:focus {
  background-color: <?php echo ot_get_option( 'act_second_color_hover' ); ?>;
  border: 1px solid <?php echo ot_get_option( 'act_second_color_hover' ); ?>;
}

.btn-outline:hover, .btn-outline:active, .btn-outline:focus {
    background: <?php echo ot_get_option( 'act_second_color' ); ?>;
}

#fundraiser-bar form button.migla_donate_now{
    background: <?php echo ot_get_option( 'act_second_color' ); ?> !important;
}

#fundraiser-bar form button.migla_donate_now:hover {
    background-color: <?php echo ot_get_option( 'act_second_color_hover' ); ?> !important;
}

.blog-slider .owl-controls .owl-buttons .owl-prev,
.blog-slider .owl-controls .owl-buttons .owl-next {
    background: <?php echo ot_get_option( 'act_second_color' ); ?>;
}

.blog-slider .owl-controls .owl-buttons .owl-prev:hover,
.blog-slider .owl-controls .owl-buttons .owl-next:hover {
    background: <?php echo ot_get_option( 'act_second_color_hover' ); ?>;
}

a, .text-primary {
    color: <?php echo ot_get_option( 'act_link_color' ); ?>;
}

a:hover, a:active {
    color: <?php echo ot_get_option( 'act_link_color_hover' ); ?>;
}

</style>
<?php }
add_action('wp_head','act_custom_styling');

?>