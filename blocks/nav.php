<!-- nav -->
<? if($_SERVER['REQUEST_URI'] =='/' and $_SERVER['REQUEST_URI'] =='/index.php') { ?>
    <nav class="nav">
        <div class="container">
            <div class="nav-wrapper">
                <div class="nav-logo">
                    <a href="index.php"><img src="ngn/img/icon/logo-main.svg" alt="">
                        <span>Техническая ассоциация <br>
                            промышленного дизайна</span>
                    </a>
                </div>
                <div class="nav-items">
                    <a href="contacts.php" class="nav-item nav-order-btn">сделать заказ</a>
                    <a href="" class="nav-item"><img src="ngn/img/icon/tg-white.svg" alt=""></a>
                    <a href="#" class="nav-item callback"><img src="ngn/img/icon/avatar-white.svg" alt=""></a>
                    <div class="callback-form">
                        <h4 class="callback-form-title">Обратный звонок</h4>
                        <form action="">
                            <input type="text" name="" placeholder="Ваше имя"> <br>
                            <input type="tel" name="" placeholder="Номер телефона">
                            <button type="submit" class="callback-form-btn">заказать</button>
                        </form>
                    </div>
                    <div class="nav-group">
                        <ul class="nav-links">
                            <li>
                                <a href="index.php" class="nav-link ">Главная</a>
                            </li>
                            <li>
                                <a href="about.php" class="nav-link">О компании</a>
                            </li>
                            <li>
                                <a href="about.php" class="nav-link">Резиденты</a>
                            </li>
                            <li>
                                <a href="service.php" class="nav-link">Услуги</a>
                            </li>
                            <li>
                                <a href="service.php" class="nav-link">Портфолио</a>
                            </li>
                            <li>
                                <a href="contacts.php" class="nav-link">Форма заказа</a>
                            </li>
                            <li>
                                <a href="contacts.php" class="nav-link">Достижения</a>
                            </li>

                        </ul>
                    </div>
                    <div class="nav-item burger">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
<? } else { ?>
    <nav class="nav-white">
        <div class="container-white">
            <div class="nav-wrapper">
                <div class="nav-logo nav-logo-white">
                    <a href="index.php"><img src="ngn/img/icon/logo-footer.svg" alt="">
                        <span>Техническая ассоциация <br>
                            промышленного дизайна</span>
                    </a>
                </div>
                <div class="nav-items">
                    <a href="contacts.php" class="nav-item nav-order-btn nav-order-btn-white">сделать заказ</a>
                    <a href="" class="nav-item"><img src="ngn/img/icon/tg-black.svg" alt=""></a>
                    <a href="#" class="nav-item callback"><img src="ngn/img/icon/avatar-black.svg" alt=""></a>
                    <div class="callback-form callback-form-white">
                        <h4 class="callback-form-title">Обратный звонок</h4>
                        <form action="">
                            <input type="text" name="" placeholder="Ваше имя"> <br>
                            <input type="tel" name="" placeholder="Номер телефона">
                            <button type="submit" class="callback-form-btn">заказать</button>
                        </form>
                    </div>
                    <div class="nav-group nav-group-white">
                        <ul class="nav-links">
                            <li>
                                <a href="index.php" class="nav-link ">Главная</a>
                            </li>
                            <li>
                                <a href="about.php" class="nav-link">О компании</a>
                            </li>
                            <li>
                                <a href="about.php" class="nav-link">Резиденты</a>
                            </li>
                            <li>
                                <a href="service.php" class="nav-link">Услуги</a>
                            </li>
                            <li>
                                <a href="service.php" class="nav-link">Портфолио</a>
                            </li>
                            <li>
                                <a href="contacts.php" class="nav-link">Форма заказа</a>
                            </li>
                            <li>
                                <a href="contacts.php" class="nav-link">Достижения</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-item burger burger-white">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
<? } ?>