<!-- О конференции -->
<section class="cpp-b_section">
    <div class="cpp-r_wrap">
        <div class="cpp-b_sidetext cpp-b_responsive-row-cols">
            <a name="about" class="cpp-e_hash-link"></a>
            <div class="sidetext-left row-col">
                <img src="/app/build/template/matreshka-balalaika.svg" alt="">
            </div>
            <div class="sidetext-right row-col">
                <h2 class="cpp-e_block-title">
                    <?php tr('about') ?>
                </h2>
                <div class="cpp-b_block-text">
                    <?php tr('about conf') ?>
                    <?php tr('location') ?>
                    <?php tr('community') ?>
                </div>
                <div class="cpp-b_bordered-text">
                    <?php tr('keynote') ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /О конференции -->
<!-- Доклады -->
<section class="cpp-b_section gray-section talks-section">
    <div class="cpp-r_wrap">
        <div class="cpp-b_talks cpp-b_responsive-row-cols">
            <!-- -->
            <div class="cpp-b_talks_description row-col">
                <a name="talks" class="cpp-e_hash-link"></a>
                <h2 class="cpp-e_block-title">
                    <?php tr('talks') ?>
                </h2>
                <div class="cpp-b_block-text">
                    <?php tr('apply') ?>
                </div>
                <a class="bubble-link" href="mailto:talks@cpp-russia.ru"><?php tr('apply bubble') ?></a>
            </div>
            <!-- -->
            <!-- -->
            <?php
                $speakers = $GLOBALS["speakers"];
                if (count($speakers) <= 5) {
                    foreach($speakers as $speaker) {
                        renderTalkTeaser($speaker);
                    }
                } else {
                    $i = 0;
                    $chosen = array();
                    foreach($speakers as $speaker) {
                        $rnd = rand(0, count($speakers) - 1);
                        if (in_array($rnd, $chosen))
                            continue;
                        
                        array_push($chosen, $rnd);
                        $speaker = $speakers[$rnd];
                        if (renderTalkTeaser($speaker)) {
                            if (++$i >= 5) 
                                break;
                        }
                    }
                }
            ?>
            <!-- -->
        </div>
        <div class="cpp-b_content-centered">
            <a class="cpp-e_green-button" href="/talks"></a>
        </div>
    </div>
</section>
<!-- /Доклады -->
<?php partial("partials/program", $GLOBALS["project_root"]); ?>
<?php partial("partials/buytickets", $GLOBALS["project_root"]); ?>
<?php partial("partials/sponsors", $GLOBALS["project_root"]); ?>
<!-- Контакты -->
<section class="cpp-b_section section-contacts">
    <div class="cpp-r_wrap">
        <div class="cpp-b_responsive-row-cols">
            <div class="row-col">
                <a name="contacts" class="cpp-e_hash-link"></a>
                <h2 class="cpp-e_block-title">
                    Контакты
                </h2>
                <div class="cpp-b_block-text">
                    <?php tr('location') ?>
                    <p>Если у Вас есть вопросы,<br>их можно задать по телефону или почте </p>
                </div>
                <div class="cpp-b_contacts">
                    <div class="cpp-e_contact phone">
                        +7 (905) 292-77-13
                    </div>
                    <div class="cpp-e_contact email">
                        <a href="mailto:conf@cpp-russia.ru">conf@cpp-russia.ru</a>
                    </div>
                </div>
            </div>
            <div class="row-col">
                <div class="cpp-b_map">
                    <div id="google_map">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Контакты -->
