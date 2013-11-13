<section class="rub-wrapper" data-widget='accordion'>

    <div class="b-h">
        <a href="#"><? echo $name; ?></a>
    </div>

    <div class="rub-inner">
        <div class="rub-art">
            <a href="#" class="rub-art-link">
                <span class="video-link-b"></span>

                <img class="rub-art-image" alt="Столичная «скорая помощь» становится престижной"
                     src="img/content/<? echo mt_rand(0, 9) ?>.jpg">
                <span class="rub-art-h">Столичная «скорая помощь» становится престижной</span>
            </a>
        </div>

        <ul class="rub-list">
            <?for ($s = 1; $s <= 6; $s++) {
                echo '
                    <li class="rub-list-item">
                        <span class="video-link-s"></span>
                        <a class="rub-list-link" href="#">До аэропорта «Шереметьево» — на легком метро</a>
                    </li>';
            }?>
        </ul>

    </div>

</section>
