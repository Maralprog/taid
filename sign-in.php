<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <? include('blocks/head.php'); ?>
</head>
<body>
    <div class="sign-in-main">
        <div class="container">
            <?php
                if( isset( $_GET['note'] ) ) {
                    switch( $_GET['note'] ) {
                        case 'n':
                            $title_text = 'Авторизуйтесь пожалуйста';
                            break;
                        case 'e':
                            $title_text = 'Неверный логин или пароль';
                            break;
                    }
                    echo '<h2>'.$title_text.'</h2>';
                }
            ?>
            <form action="login.php" class="sign-in-form" method="post">
                <input type="email" name="email" id="" placeholder="Email">
                <input type="password" name="password" id="" placeholder="Пароль">
                <button type="submit" name="sign_in" class="sign-in-btn">Войти</button>
            </form>
        </div>
    </div>
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="ngn/js/app.js"></script>
</body>

</html>