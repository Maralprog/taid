<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Main Page</title>
    <? include('blocks/head.php'); ?>
</head>
<body>
    <? include('blocks/nav.php'); ?>

    <main>
        <section class="about-company">
            <div class="container">
                <?
                    if( $_GET['note'] == 's' ) {
                        echo '<h2>Спасибо, ваш заказ принят!</h2>';
                    }
                ?>
                <h2 class="reviews-title">Форма заказа</h2>
                <div class="contacts-wrapper">
                    <div class="contacts-item">
                        <p>Сделайте первый шаг к созданию вашего идеального продукта уже сегодня! </p>
                        <p> Заполните форму заказа и получите консультацию от нашей команды экспертов по промышленному дизайну.</p>
                        <p>Мы готовы помочь вам воплотить ваши идеи в жизнь и достичь успеха в вашем бизнесе</p>
                    </div>
                    <div class="contacts-item contacts-item-form">
                        <form action="order.php" method="post" enctype="multipart/form-data">
                            <div class="contacts-form-wrapper">
                                <div class="contacts-form-left">
                                    <input type="text" name="fio" placeholder="ФИО">
                                    <select name="region" onfocus='this.size=5;' onblur='this.size=1;'
                                        onchange='this.size=1; this.blur();'>
                                        <option value="">Регион</option>
                                        <option value="1">регион №1</option>
                                        <option value="2">регион №2</option>
                                        <option value="3">регион №3</option>
                                        <option value="4">регион №4</option>
                                        <option value="5">регион №5</option>
                                        <option value="6">регион №6</option>
                                        <option value="7">регион №7</option>
                                        <option value="8">регион №8</option>
                                        <option value="9">регион №9</option>
                                    </select>
                                    <input type="text" name="theme" placeholder="Тема сообщения">
                                </div>
                                <div class="contacts-form-right">
                                    <input type="email" name="service" placeholder="Email">
                                    <select onfocus='this.size=5;' onblur='this.size=1;'
                                        onchange='this.size=1; this.blur();'>
                                        <option value="">Тип услуги</option>
                                        <option value="prom_design">Промышленный дизайн</option>
                                        <option value="prod_design">Продуктовый дизайн</option>
                                        <option value="konk_train">Конкурсы и тренинги</option>
                                    </select>
                                    <input type="text" name="desc" placeholder="Краткое описание обращения">
                                    <div class="file-input">
                                        <input type="file" name="file" id="file-input"
                                            class="file-input__input" />
                                        <label class="file-input__label" for="file-input">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.0583 8.72679C13.4741 8.72679 13.8112 9.04693 13.8112 9.44187V12.3022C13.8112 13.0921 13.137 13.7324 12.3053 13.7324H1.7645C0.932851 13.7324 0.258667 13.0921 0.258667 12.3022V9.44187C0.258667 9.04693 0.595763 8.72679 1.01158 8.72679C1.4274 8.72679 1.7645 9.04693 1.7645 9.44187V12.3022H12.3053V9.44187C12.3053 9.04693 12.6424 8.72679 13.0583 8.72679ZM7.70042 0.485007L10.7616 3.39245C11.0557 3.6717 11.0557 4.12447 10.7616 4.40372C10.4676 4.68298 9.99094 4.68298 9.69685 4.40372L7.78783 2.59061V9.44187C7.78783 9.83681 7.45075 10.157 7.03492 10.157C6.61908 10.157 6.282 9.83681 6.282 9.44187V2.59061L4.37296 4.40372C4.07892 4.68298 3.6022 4.68298 3.30817 4.40372C3.01414 4.12447 3.01414 3.6717 3.30817 3.39245L6.36941 0.485007C6.73699 0.135939 7.33285 0.135939 7.70042 0.485007Z"
                                                    fill="black" />
                                            </svg>
                                            <span>Загрузить файл</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="contacts-form-btns">
                                <button name="order_go" type="submit" value="order_go"
                                    style="background-color: #ffdf4b;color:white;border-radius: 24px;border: none;">Отправить</button>
                                <br>
                                <button type="reset"
                                    style="background-color:transparent;border: 1px solid black; color:black;border-radius: 24px;">Очистить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="achievements">
            <div class="container ">
                <h2 class="reviews-title">Достижения</h2>
                <div class="swiper  mySwiper3 swiper-initialized swiper-horizontal swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-56051104d710efc0710" aria-live="polite">
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 6"
                            style="width: 320px;">
                            <img src="ngn/img/progress1.png" alt="">
                        </div>
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 6"
                            style="width: 320px;">
                            <img src="ngn/img/progress2.png" alt="">
                        </div>
                        <div class="swiper-slide" role="group" aria-label="3 / 6" style="width: 320px;">
                            <img src="ngn/img/progress3.png" alt="">
                        </div>
                        <div class="swiper-slide" role="group" aria-label="4 / 6" style="width: 320px;">
                            <img src="ngn/img/progess4.png" alt="">
                        </div>
                        <div class="swiper-slide" role="group" aria-label="5 / 6" style="width: 320px;">
                            <img src="ngn/img/progess5.png" alt="">
                        </div>
                        <div class="swiper-slide" role="group" aria-label="6 / 6" style="width: 320px;">
                            <img src="ngn/img/progess6.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                        aria-controls="swiper-wrapper-33991010a6ee619d52" aria-disabled="false">
                    </div>
                    <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                        aria-label="Previous slide" aria-controls="swiper-wrapper-33991010a6ee619d52"
                        aria-disabled="true">
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </section>
    </main>

    <? include('blocks/footer.php'); ?>
</body>

</html>