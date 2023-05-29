<?
    session_start();
    if( !isset( $_SESSION['email'] ) ) {
        header('Location: sign-in.php?note=n');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <? include('blocks/head.php'); ?>
</head>
<body>
    <div class="sign-in-main">
        <div class="container">
            <br><br><br>
            <?
                if( $_GET['note'] == 's' ) {
                    echo '<h2>Проект добавлен</h2>';
                }
            ?>
            <p class="add-desc">Добавить проект</p>
            <form action="work_save.php" method="post" class="sign-in-form add-form" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="название">
                <input type="text" name="category" placeholder="категория">
                <input type="text" name="company" placeholder="компания">
                <div class="file-input">
                    <input type="file" name="file" id="file-input" class="file-input__input" />
                    <label class="file-input__label" for="file-input">
                        <span>Загрузить файл</span>
                    </label>
                </div>
                <textarea name="desc" placeholder="описание"></textarea>
                <button name="work_go" type="submit" class="sign-in-btn" value="save">сохранить</button>
            </form>
        </div>
    </div>

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="ngn/js/app.js"></script>
</body>

</html>