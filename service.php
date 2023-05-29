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
                <h2 class="reviews-title">Услуги</h2>
                <div class="service-wrapper">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="ngn/img/icon/prom.svg" alt="">
                        </div>
                        <h4>Промышленный дизайн</h4>
                        <p>Мы работаем над созданием и разработкой инновационных и привлекательных продуктов, которые
                            соответствуют потребностям и ожиданиям клиентов.</p>
                        <p>Услуги включают в себя анализ и исследование рынка, концептуальное проектирование, создание
                            прототипов, инженерное проектирование, выбор материалов и технологий производства, а также
                            разработку документации для производства.</p>
                    </div>
                    <div class="service-item">
                        <div class="service-img">
                            <img src="ngn/img/icon/prod.svg" alt="">
                        </div>
                        <h4>Продуктовый дизайн</h4>
                        <p>Мы работаем с клиентами, чтобы понять их потребности и визию, и затем превратить их идеи в
                            реальность. В процессе оказания услуг продуктового дизайна проводится анализ рынка и
                            конкурентов, исследуется целевая аудитория и ее требования.</p>
                        <p>
                            Создание концептуальных решений и визуализаций продуктов, используя современные инструменты
                            и технологии. А также разработка прототипов, которые позволяют клиентам оценить внешний вид,
                            функциональность и эргономику продукта.</p>
                    </div>
                    <div class="service-item">
                        <div class="service-img">
                            <img src="ngn/img/icon/konk.svg" alt="">
                        </div>
                        <h4>Конкурсы и тренинги</h4>
                        <p>Проведение тренингов и конкурсов предоставляются для развития навыков, повышения
                            профессионализма и стимулирования интереса к профессии среди участников.</p>
                        <p>Наша команда экспертов и тренеров разрабатывает и проводит разнообразные тренинги и конкурса,
                            которые помогают участникам приобрести новые знания, развить навыки и расширить свои
                            возможности в области управления компетенциями, коммуникации, дизайна.</p>
                    </div>
                </div>

                <div class="service-btn">
                    <a href="contacts.php">Сделать заказ</a>
                </div>
            </div>
        </section>
        <section class="about-company">
            <div class="container">
                <h2 class="reviews-title">Портфолио</h2>
                <div class="portfolio-wrapper">
                    <div class="service-item portfolio-item1">
                        <div class="portfolio-info">
                            <h4>Паяльная станция</h4>
                            <p>название компании</p>
                            <span>описание проекта описание проектаописание проектаописание проектаописание </span>
                        </div>
                    </div>
                    <div class="service-item portfolio-item2">
                        <div class="portfolio-info">
                            <h4>Медприбор</h4>
                            <p>название компании</p>
                            <span>описание проекта описание проектаописание проектаописание проектаописание </span>
                        </div>
                    </div>
                    <div class="service-item portfolio-item3">
                        <div class="portfolio-info">
                            <h4>Медали</h4>
                            <p>название компании</p>
                            <span>описание проекта описание проектаописание проектаописание проектаописание </span>
                        </div>
                    </div>
                </div>
                <div class="portfolio-btn">
                    <a href="portfolio.php">Посмотреть все <span><img style="margin-left:10px"
                                src="ngn/img/icon/Vector.png" alt=""></span></a>
                </div>
            </div>
        </section>
    </main>

    <? include('blocks/footer.php'); ?>
</body>

</html>