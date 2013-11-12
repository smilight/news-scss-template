<section class="line <? echo $block_class ?>">
    <section class="col12" data-widget='accordion'>
        <h2 class="block-name"><a href="#"><? echo $name;?></a></h2>

        <div class="row-fluid">
            <section class="row">
                <a href="#" class="button prev">left</a>

                <div class="viewport">
                    <ul class="overview">
                        <?
                        for ($s = 1; $s <= 10; $s++) {
                            echo '
                            <li class="slide sub-col3">
                            <a href="#" class="thumbnail"><img alt="" src="img/content/';

                            echo mt_rand(0, 9);
                            echo '.jpg">';

                            if( $block_class = 'video'){
                                echo'<span class="badge-video"></span>';
                            }
                            echo '<span class="slider-header">Конвергентный эфир. "Москва вечерняя". 8 июля</span>
                            </a>
                            </li>';
                        }
                        ?>
                    </ul>
                    <!-- [END] slider -->
                    </ul>
                </div>

                <a href="#" class="button next">right</a>
            </section>
        </div>
    </section>
</section>
