<!-- Купить билет -->
<section class="cpp-b_section">
    <div class="cpp-r_wrap">
        <div class="cpp-b_buy-tickets cpp-b_responsive-row-cols">
            <div class="buy-tickets-left row-col">
                <a name="tickets" class="cpp-e_hash-link"></a>
                <h2 class="cpp-e_block-title">
                    <?php print tr('tickets'); ?>
                </h2>
                <div class="cpp-b_block-text">
                    <p>
                        <?php print tr('tickets info'); ?>
                    </p>
                </div>
                <div class="online">
                    <img src="/app/frontend/template/elem-buy-tickets.svg" alt="">
                </div>
                <div class="cpp-b_block-text">
                    <h3 class="cpp-b_block-text-title">
                        <?php print tr('tickets entry'); ?>
                    </h3>
                    <p>
                        <?php print tr('tickets entry text'); ?>
                    </p>
                </div>
                <div class="cpp-b_block-text">
                    <h3 class="cpp-b_block-text-title">
                        <?php print tr('tickets master'); ?>
                    </h3>
                    <p>
                        <?php print tr('tickets master text'); ?>
                    </p>
                </div>
                <div class="cpp-b_block-text">
                    <h3 class="cpp-b_block-text-title">
                        <?php print tr('tickets online'); ?>
                    </h3>
                    <p>
                        <?php print tr('tickets online text'); ?>
                    </p>
                </div>
                <div class="cpp-b_block-text">
                    <h3 class="cpp-b_block-text-title">
                        <?php print tr('tickets block'); ?>
                    </h3>
                    <p>
                        <?php print tr('tickets block text'); ?>
                    </p>
                </div>
            </div>
            <div class="buy-tickets-right row-col">
                <?php
                    $today = new DateTime("now");
                ?>
              <!-- Таблица с ценами -->
                <div class="price">
                  <h2 class="price__title"><?php print tr('prices')?></h2>
                  <table class="price__table">

                    <tr class="price__table-row">
                      <th><?php print tr('date of purchase') ?></th>
                      <th><?php print tr('ticket') ?></th>
                      <th><?php print tr('workshop ticket') ?></th>
                      <th><?php print tr('online ticket') ?></th>
                    </tr>
                    <?php if (new DateTime("now") < new DateTime("2018-02-01")):?>
                    <tr class="price__table-row">
                      <td><?php print tr('2018-02-01') ?></td>
                      <td><?php print tr("9500₽") ?>
                      <td><?php print tr("8000₽") ?>
                      <td><?php print tr("3000₽") ?>
                    </tr>
                    <?php endif; ?>
                    <?php if (new DateTime("now") < new DateTime("2018-03-01")):?>
                    <tr class="price__table-row">
                      <td><?php print tr('2018-03-01') ?></td>
                      <td><?php print tr("10500₽") ?>
                      <td><?php print tr("9000₽") ?>
                      <td><?php print tr("3000₽") ?>
                    </tr>
                    <?php endif; ?>
                    <?php if (new DateTime("now") < new DateTime("2018-04-01")):?>
                    <tr class="price__table-row">
                      <td><?php print tr('2018-04-01') ?></td>
                      <td><?php print tr("11500₽") ?>
                      <td><?php print tr("10000₽") ?>
                      <td><?php print tr("3000₽") ?>
                    </tr>
                    <?php endif; ?>
                    <tr class="price__table-row">
                      <td><?php print tr('after 2018-04-01') ?></td>
                      <td><?php print tr("12500₽") ?>
                      <td><?php print tr("11000₽") ?>
                      <td><?php print tr("3000₽") ?>
                    </tr>
                  </table>
                </div>
                <!-- /Таблица с ценами -->
                <div class="cpp-b_only-desktop">
                    <h2 class="widget__title">
                        <?php print tr('buy ticket'); ?>
                    </h2>
                    <a href=<?php print '"https://c-user-group-russia.timepad.ru/event/' . tr('event-id') . '/"' ?> data-twf-placeholder="yes">
                        <?php print tr('buy tickets') ?>
                    </a>
                    <script type="text/javascript" defer="defer" charset="UTF-8" data-timepad-customized=<?php print tr('data-timepad-customized') ?>
                        data-twf2s-event--id=<?php print '"' . tr('event-id') . '"' ?> data-timepad-widget-v2="event_register"
                        src="https://timepad.ru/js/tpwf/loader/min/loader.js">
                        (function() {
                            return {
                                "loadCSS": [
                                    "./app/build/css/timepad.css"
                                ],
                                "skipBaseCSS": true,
                                "disableBootstrap": true
                            };
                        })();
                    </script>
                </div>
                <div class="cpp-b_only-mobile">
                    <a style="display: block;    margin: 0 auto;" class="cpp-e_green-button" href=<?php print '"https://c-user-group-russia.timepad.ru/event/' . tr('event-id') . '/"' ?> >
                        <?php print tr('buy tickets') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Купить билет -->
