<?php
    session_start();
    if(isset($_SESSION["login"]) != "logueado"){
        header("location:../src/components/login.php");
    }   
?>
<div class="nav_major container-fluid d-flex justify-content-between align-items-center bg-dark p-3">
    <div class="nav_major__logo d-flex gap-3" style="width: 1fr">
        <img class="im" src="../../assets/img/logo.png" alt="logo-login">
        <span class="fs-3 lh-lg text-light">PHPm_Login</span>
    </div>
    <div class="nav_major__links d-flex gap-5">
        <a href="#" class="text-decoration-none text-light fs-4" id="home">Home</a>
        <a href="#" class="text-decoration-none text-light fs-4">Site</a>
        <a href="#" class="text-decoration-none text-light fs-4">About</a>
        <a href="#" class="text-decoration-none text-light fs-4">Settings</a>
    </div>
    <div class="nav_major_options_login">
        <button 
            class="btn btn-primary" id="login_btn">
            <?php isset($_SESSION["login"]) == "logueado" ? print_r("logged-in") : print_r("Login"); ?>
        </button>

        <button 
            class="btn btn-secondary"
            ><?php isset($_SESSION["login"]) == "logueado" ? print_r("Status") : print_r("Register"); ?>
        </button>        
    </div>
</div>