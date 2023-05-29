<?php
    if( isset( $_POST['sign_in'] ) ) {
        require_once('conf.php');
        if( $_POST['password'] !== LOGIN_PASSWORD and $_POST['email'] !== LOGIN_EMAIL ) {
            header('Location: sign-in.php?note=e');
        } elseif( $_POST['password'] == LOGIN_PASSWORD and $_POST['email'] == LOGIN_EMAIL ) {
            session_start();
            $_SESSION['email'] = $_POST['email'];
            header('Location: add.php');
        }
    }