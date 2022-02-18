<?php 

    //Authorization - Access COntrol
    //Check whether the user is logged in or not
    if(!isset($_SESSION['user'])) //IF user session is not set
    {
        //User is not logged in
        //Redirect to login page with message
        $_SESSION['no-login-message'] = "<div class='error text-center'>Please login to access Admin Panel.</div>";
        //Redirect to Login Page
        header('location:'.SITEURL.'admin/login.php');
    }

?>