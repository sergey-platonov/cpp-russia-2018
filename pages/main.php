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
                    <?php print tr('about') ?>
                </h2>
                <div class="cpp-b_block-text">
                    <?php print tr('about conf') ?>
                    <?php print tr('location') ?>
                    <?php print tr('community') ?>
                </div>
                <div class="cpp-b_bordered-text">
                    <?php print tr('keynotes') ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /О конференции -->
<!-- Доклады -->
<section class="cpp-b_section gray-section talks-section">
    <div class="cpp-r_wrap">
        <a name="talks" class="cpp-e_hash-link"></a>
        <h2 class="cpp-e_block-title">
            <?php print tr('talks') ?>
        </h2>
        <!--                <div class="cpp-b_block-text">-->
        <!--                    --><?php //print tr('apply') ?>
        <!--                </div>-->
        <!--                <a class="bubble-link" href="mailto:talks@cpp-russia.ru">--><?php //print tr('apply bubble') ?><!--</a>-->
        <div class="cpp-b_talks cpp-b_responsive-row-cols">
            <?php renderFewTeasers(6)?>
        </div>
        <div class="cpp-b_content-centered">
            <a class="cpp-e_green-button" href="<?php echo $GLOBALS["prefix"] . "/talks" . lang_prefix()?>"><?php print tr('all talks') ?></a>
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
                    <?php print tr('contacts') ?>
                </h2>
                <div class="cpp-b_block-text">
                    <?php print tr('location') ?>
                    <?php print tr('if you have questions') ?>
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
