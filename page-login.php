<?php

/*
 * Template Name: Lagin Page 
 */

  global $user_ID; 
  global $wpdb;
   
  if(!$user_ID){
    //   user is in logged out state
     if($_POST){
         $username=$wpdb-> escape($_POST['username']);
         $password=$wpdb-> escape($_POST['password']);

         $login_array=array();
         $login_array['user_name']=$username;
         $login_array['user_password']=$password;

         $verify_user = wp_signon( $login_array, true );

         if(!is_wp_error( $verify_user )){
            
            echo "<script>windows.location=". site_url('/') ."</script>";
         }else{
            echo "<p>Invalid Credentials</p>";
             
         }

     }else{  


    get_header(); 
    ?>
  <style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
    .login{
    height: 350px;
    background-color: gainsboro;
    text-align: center;
    left: 354.5px;
    height: 350px;
    width: 308px;
    position: relative;
    top: 30px;
    border: 1px solid rgb(0, 0, 0);
    opacity: 0.6;
    border-radius:5px;
    }
    .login-username:nth-child(1) > label:nth-child(1) {
 top: 99px;
 position: relative;
 left: -1.10938px;
}

#wp-submit {
 position: relative;
 top: 160px;
 width: 92px;
 height: 29px;
 font-weight: bold;
 font-style: normal;
}

.login-remember:nth-child(3) > label:nth-child(1) {
 position: relative;
 top: 152px;
 width: 178px;
 height: 28px;
}

#user_pass {
 width: 227px;
 top: 137px;
 position: relative;
 left: 0.5px;
}

#user_login {
 position: relative;
 top: 114px;
 width: 224px;
}

.login-password:nth-child(2) > label:nth-child(1) {
 width: 87px;
 height: 26px;
 left: -66.5px;
 position: relative;
 top: 131px;
}
</style>


<div class="container " style=" padding: 4em;">
<div class="login">
<?php  

 $args=array(
     'redirect'=> home_url()
 );
echo  wp_login_form($args);

?></div>
</div>

 <?php
   
   get_footer();
     }
}else {
    // logged in state
  }
  