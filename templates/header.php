<div class="responsive-head">
    <div class="cpp-r_wrap cpp-b_responsive-row-cols">
        <div class="row-col">
            <?php
                $prefix = lang_prefix();
                print '<a href="/' . $prefix . '" class="cpp-e_logo"></a>';
            ?>
            <div class="cpp-b_main-menu">
                <div class="cpp-e_main-menu-button">

                </div>
                <div class="cpp-b_main-menu-links">
                    <div class="main-menu_link">
                        <?php render_header_link('about') ?>
                    </div>
                    <div class="main-menu_link">
                        <?php render_header_link('talks') ?>
                    </div>
                    <div class="main-menu_link">
                        <?php render_header_link('schedule') ?>
                    </div>
                    <div class="main-menu_link">
                        <?php render_header_link('tickets') ?>
                    </div>
                    <div class="main-menu_link">
                        <?php render_header_link('sponsors') ?>
                    </div>
                    <div class="main-menu_link">
                        <?php render_header_link('contacts') ?>
                    </div>
                    <div class="main-menu_link">
                        <?php
                        if (get_locale() == 'ru')
                            print '<a href="/?lang=en">EN</a>';
                        else
                            print '<a href="/?lang=ru">RU</a>';
                        ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="row-col">
            <div class="cpp-b_contacts">
                <div class="cpp-e_contact phone">
                    +7 (905) 292-77-13
                </div>
                <div class="cpp-e_contact email">
                    <a href="mailto:conf@cpp-russia.ru">conf@cpp-russia.ru</a>
                </div>
            </div>
        </div>
    </div>

</div>