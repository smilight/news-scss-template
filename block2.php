<section class="parrent-row clearfix block3">
    <section class="news-bl-wrapper">

        <section class="blogers-wrapper">
            <h2 class="block-name"><a href="#">Колумнисты</a></h2>

            <section class="blogers carouselwbig">
                <a href="#" class="buttons top prev"><</a>

                <div class="viewport">
                    <ul class="overview">
                        <? for ($s = 1; $s <= 15; $s++) {
                            echo '<li class="bloger-single">
                                <a class="bloger-image" href="#">
                                    <img alt="Вотяковщина" src="img/content/column';
                            echo mt_rand(0, 3);
                            echo '.jpg">
                                </a>

                                <a href="#" class="bloger-name">
                                    Екатерина Рощина
                                </a>

                                <a class="bloger-article-header" href="#">Вотяковщина</a>

                                <div class="bloger-article-misc">
                                    <div class="bloger-article-date">
                                        21:18
                                        <span class="">5 июля 2013</span>
                                    </div>

                                    <a href="#" class="bloger-article-comments">59</a>

                                </div>

                                <div class="bloger-article-text">
                                    <p>Вполне вероятно, что я сейчас придумала новый термин, который дает название
                                        целому
                                        явлению. Андрей Вотяков - это врач-реаниматолог, прославившийся тем, что бьет
                                        человека
                                        после операции. Кадры из пермской больницы, запечатлевшие, как опутанного
                                        трубками
                                        беспомощного человека дубасит разъяренный...</p>
                                </div>
                                <!-- [END] class="content" -->
                            </li>';
                        }?>

                    </ul>

                </div>
                <a href="#" class="buttons top next">></a>
            </section>
        </section>

        <section class="sms-port-wrapper">
            <h2 class="sms-port-header">
                <a class="sms-port-header-link" href="#">портал</a>
            </h2>
            <section class="sms-port-inner carouselwbig">
                <a href="#" class="button prev"><</a>

                <div class="viewport">

                    <ul id="sms-slider" class="overview">
                        <? for ($s = 1; $s <= 15; $s++) {
                            echo '<li class="sms">
                                <p>Купил тур, но потерял загранпаспорт. Не знаю, что делать. Можно ли быстро сделать
                                    новый
                                    загранпаспорт? Посоветуйте!...</p>
                                <a class="sms-answ" href="#">Ответ</a>
                            </li>';
                        } ?>
                    </ul>
                </div>
                <a href="#" class="button next">></a>
            </section>


        </section>

        <?
        $name = 'Город';
        include 'rubrika.php';

        $name = 'коридоры власти';
        include 'rubrika.php';

        $name = 'проишествия';
        include 'rubrika.php';

        $name = 'общество';
        include 'rubrika.php';
        ?>

    </section>
</section>
