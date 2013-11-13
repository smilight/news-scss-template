<section class="s-wrapper-outer <? echo $block_class ?>" data-widget='accordion'>
    <div class="b-h">
        <a href="#"><? echo $name; ?></a>
    </div>

    <div class="s-wrapper">
        <a href="#" class="button prev">left</a>

        <div class="viewport">
            <ul class="overview">
                <? for ($s = 1; $s <= 10; $s++) {
                    echo '<li class="slide sub-col3">
                            <a href="#" class="s-image-wrapper">
                                <img class="s-image" alt="" src="img/content/';

                    echo mt_rand(0, 9);
                    echo '.jpg">';

                    echo '<span class="video-link-b"></span>
                            <div class="special-date"><b>14:02</b>8 июля 2013</div>
                            <span class="s-h">Конвергентный эфир. "Москва вечерняя". 8 июля</span>
                            </a>
                            </li>';
                }?>
            </ul>
            <!-- [END] slider -->
            </ul>
        </div>

        <a href="#" class="button next">right</a>
    </div>
</section>
