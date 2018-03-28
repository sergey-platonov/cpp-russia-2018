<?php

function get_locale() {
    if ($GLOBALS['locale'])
        $locale = $GLOBALS['locale'];
    else
        $locale = substr(locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']), 0, 2);
    if (!$locale)
        $locale = 'ru';

    if ($locale != 'ru')
        $locale = 'en';

    return $locale;
}

function tr($text) {
    $TR['ru']['best speakers'] = 'лучших докладчиков';
    $TR['en']['best speakers'] = 'great speakers';


    $TR['ru']['minutes'] = 'минут информации<br>для опытных<br>разработчиков';
    $TR['en']['minutes'] = 'minutes<br>for experienced<br>developers';

    $TR['ru']['title'] = 'Конференция C++ Russia, 19-21 апреля 2018';
    $TR['en']['title'] = 'C++ Russia 2018, April 19-21 2018';

    $TR['ru']['title with br'] = 'Конференция C++ Russia<br>Санкт-Петербург<br>19-21 апреля 2018';
    $TR['en']['title with br'] = 'C++ Russia<br>Saint-Petersburg, Russia<br>April 19-21 2018';

    $TR['ru']['not found'] = 'Запрашиваемая страница не найдена';
    $TR['en']['not found'] = 'Requested page not found';

    $TR['ru']['about conf'] = '<p>Конференция «C++ Russia» с блинами и матрёшками! Как всегда, лучшие докладчики<br>
со всей страны на два дня. Конференция ориентирована на опытных разработчиков, никаких вводных лекций!</p>';
    $TR['en']['about conf'] = '<p>C++ Russia with bliny and matryoshkas! With great guests from around the world for two days.
 The conference is for experienced developers!</p>';

    $TR['ru']['location'] = '<p>Место проведения: Санкт-Петербург, ул. Кораблестроителей, 14, гостиница Прибалтийская.</p>';
    $TR['en']['location'] = '<p>Location: Saint Petersburg, Park Inn Pribaltiyskaya Hotel.</p>';

    $TR['ru']['community'] = '<p>В течении года сообщество проводит встречи в разных городах России: Москве, Санкт-Петербурге, 
Новосибирске, Екатеринбурге, Нижнем Новгороде, Саратове.<br>На встречах выступают докладчики из разных городов и стран.</p>';
    $TR['en']['community'] = '<p>So far we held conferences in several cities in Russia: Moscow, Saint-Petersburg, 
Yekaterinburg, Nizhny Novgorod, Kazan, Tomsk and Saratov. We invite speakers from variety of cities and from other countries as well.</p>';

    $TR['ru']['keynotes'] = 'Открывать конференцию будет Jon Kalb, разработчик с 25-летним стажем<br>
В течении этого времени успел поработать в Amazon, Microsoft, Netscape,<br>
Yahoo и других компаниях. Jon -- организатор конференции CppCon. Автор книги <br>
C++ Today: The Beast is Back.';
    $TR['en']['keynotes'] = 'Keynote speaker will be Jon Kalb, the C++ developer with 25-years of expirience.<br> 
During that time he was programming with C++ for Amazon, Apple, Dow Chemical, Intuit, Lotus, Microsoft, Netscape, Sun, 
Yahoo!, and a couple of companies you\'ve never heard about. Jon is the chairman of CppCon and the author of the "C++ Today: The Beast is Back" book.';

    $TR['ru']['apply'] = '<p><strong>Подать заявку на доклад можно<br>до 15 марта 2018 года.</strong></p>
<p>Как обычно, продолжительность доклада не должна превышать 50 минут (с учетом вопросов). Мы рады докладам о C++(11/14/17), 
STL, Boost, Qt, любых других библиотеках, тестировании и сборке крупных проектов на С++, асинхронности и конкурентности, etc.</p>';
    $TR['en']['apply'] = '<p><strong>You can offer your talk until<br>15 of March 2018.</strong></p>
<p>Your talk duration should be up to 50 minutes (including time for attendees\' questions). We welcome talks on C++, STL, Boost, Qt, 
or any other C++ library, testing and building C++ projects, concurrency, lock-free, or any other hype word you hear 
next to C++ these days.</p>';

    $TR['ru']['talks'] = 'Доклады';
    $TR['en']['talks'] = 'Talks';

    $TR['ru']['apply bubble'] = 'Хочу стать<br>спикером!';
    $TR['en']['apply bubble'] = 'Submit a talk!';

    $TR['ru']['all talks'] = 'Все доклады';
    $TR['en']['all talks'] = 'All talks';

    $TR['ru']['contacts'] = 'Контакты';
    $TR['en']['contacts'] = 'Contacts';

    $TR['ru']['if you have questions'] = '<p>Если у Вас есть вопросы,<br>их можно задать по телефону или почте </p>';
    $TR['en']['if you have questions'] = '<p>If you have any questions,<br>please ask them via phone or email</p>';

    $TR['ru']['about'] = ' ';
    $TR['en']['about'] = 'About';

    $TR['ru']['schedule'] = 'Программа';
    $TR['en']['schedule'] = 'Schedule';

    $TR['ru']['tickets'] = 'Билеты';
    $TR['en']['tickets'] = 'Tickets';

    $TR['ru']['sponsors'] = 'Спонсоры';
    $TR['en']['sponsors'] = 'Partners';

    $TR['ru']['tickets info'] = 'В этом году наших слушателей ждут<br> полезные мастерклассы, а для тех,
кто не может приехать на<br> конференцию, мы как всегда
организовали онлайн трансляцию. Присоединяйтесь!<br><br>
Как всегда действует студенческая программа.<br>
Для получения скидки пишите на <br><a href="mailto:students@cpp-russia.ru">students@cpp-russia.ru</a>';
    $TR['en']['tickets info'] = 'Great talks, useful workshops.<br>We also offer an option to attend us online.';

    $TR['ru']['tickets entry'] = 'Входной билет';
    $TR['en']['tickets entry'] = 'Conference ticket';

    $TR['ru']['tickets master'] = 'Мастер-класс';
    $TR['en']['tickets master'] = 'Workshop';

    $TR['ru']['tickets online'] = 'Онлайн';
    $TR['en']['tickets online'] = 'Online';

    $TR['ru']['tickets dinner'] = 'Ужин с докладчиками';
    $TR['en']['tickets dinner'] = 'Social event';

    $TR['ru']['tickets entry text']  = 'Посещение основной программы конференции 20-21 апреля';
    $TR['ru']['tickets master text'] = 'Однодневный интенсив, практика, индивидуальная работа. Необходим ноутбук.';
    $TR['ru']['tickets online text'] = 'Просмотр любого доклада. Записи докладов доступны в течении двух месяцев.';
    $TR['ru']['tickets dinner text'] = 'Горячая пища и общение с докладчиками в неформальной обстановке. 20 апреля в 20.00';

    $TR['en']['tickets entry text'] = 'Two days tickets for main program 20-21 April';
    $TR['en']['tickets master text'] = 'One day intensive course: a lot of practise, personal work. A laptop is required.';
    $TR['en']['tickets online text'] = 'You can watch any talk online. The videos will remain available for two months';
    $TR['en']['tickets dinner text'] = 'A dinner with speakers and some other attendees, 20 April, 8 p.m.';

    $TR['ru']['prices'] = 'Цены';
    $TR['en']['prices'] = 'Prices';

    $TR['ru']['buy ticket'] = 'Купить билет';
    $TR['en']['buy ticket'] = 'Buy ticket';

    $TR['ru']['about schedule'] = 'Первый день конференции 19 апреля -- это день мастер-классов. Вы можете посетить один четыре мастер-классов на ваш выбор. 
    Обратите внимание: два мастер-класса проходят на английском языке. Мастер-класс это практическое занятие под руководством опытного программиста. Для работы
    вам понадобится ноутбук, более подробные треования есть в описании каждого мастер-класса. На этот день продаётся отдельный билет.';
    $TR['en']['about schedule'] = ' ';

    $TR['ru']['more'] = 'Подробнее >>';
    $TR['en']['more'] = 'More >>';

    $TR['ru']['workshop registration'] = 'Регистрация на мастер-классы';
    $TR['en']['workshop registration'] = 'Registration to the workshops';

    $TR['ru']['preregistration'] = 'Предрегистрация на конференцию';
    $TR['en']['preregistration'] = 'Pre-registration to the talks';

    $TR['ru']['coffee break'] = 'Кофе-брейк';
    $TR['en']['coffee break'] = 'Coffee break';

    $TR['ru']['dinner'] = 'Обед';
    $TR['en']['dinner'] = 'Lunch break';

    $TR['ru']['registration'] = 'Регистрация';
    $TR['en']['registration'] = 'Registration';

    $TR['ru']['skype talk'] = 'Доклад по скайпу';
    $TR['en']['skype talk'] = 'Skype talk';

    $TR['ru']['date of purchase'] = 'Дата покупки';
    $TR['en']['date of purchase'] = 'Date of purchase';

    $TR['ru']['ticket'] = 'Входной билет';
    $TR['en']['ticket'] = 'Conference ticket';

    $TR['ru']['workshop ticket'] = 'Мастер-класс';
    $TR['en']['workshop ticket'] = 'Workshop ticket';

    $TR['ru']['online ticket'] = 'Онлайн';
    $TR['en']['online ticket'] = 'Online ticket';

    $TR['ru']['9500₽'] = '9500 руб.';
    $TR['en']['9500₽'] = '9500 RUB';

    $TR['ru']['8000₽'] = '8000 руб.';
    $TR['en']['8000₽'] = '8000 RUB';


    $TR['ru']['3000₽'] = '3000 руб.';
    $TR['en']['3000₽'] = '3000 RUB';

    $TR['ru']['10500₽'] = '10500 руб.';
    $TR['en']['10500₽'] = '10500 RUB';

    $TR['ru']['9000₽'] = '9000 руб.';
    $TR['en']['9000₽'] = '9000 RUB';

    $TR['ru']['11500₽'] = '11500 руб.';
    $TR['en']['11500₽'] = '11500 RUB';

    $TR['ru']['10000₽'] = '10000 руб.';
    $TR['en']['10000₽'] = '10000 RUB';

    $TR['ru']['12500₽'] = '12500 руб.';
    $TR['en']['12500₽'] = '12500 RUB';

    $TR['ru']['11000₽'] = '11000 руб.';
    $TR['en']['11000₽'] = '11000 RUB';

    $TR['ru']['2018-02-01'] = 'до 31.01.18';
    $TR['en']['2018-02-01'] = '';

    $TR['ru']['2018-03-01'] = 'с 01.02.18 по 28.02.18';
    $TR['en']['2018-03-01'] = '01.02.18 -- 28.02.18';

    $TR['ru']['2018-04-01'] = 'с 01.03.18 по 31.03.18';
    $TR['en']['2018-04-01'] = '01.03.18 -- 31.03.18';

    $TR['ru']['after 2018-04-01'] = 'с 01.04.18 по 19.04.18';
    $TR['en']['after 2018-04-01'] = '01.04.18 -- 19.04.18';

    $TR['ru']['buy tickets'] = 'Перейтик заказу билетов';
    $TR['en']['buy tickets'] = 'Buy tickets';

    $TR['ru']['data-timepad-customized'] = '"3453"';
    $TR['en']['data-timepad-customized'] = '"3453"';

    $TR['ru']['event-id'] = '593746';
    $TR['en']['event-id'] = '665219';

    $TR['ru']['platinum sponsors'] = 'Platinum спонсор';
    $TR['en']['platinum sponsors'] = 'Platinum sponsor';

    $TR['ru']['gold sponsors'] = 'Gold спонсоры';
    $TR['en']['gold sponsors'] = 'Gold sponsors';

    $TR['ru']['silver sponsors'] = 'Silver спонсоры';
    $TR['en']['silver sponsors'] = 'Silver sponsors';

    $TR['ru']['community sponsors'] = 'Community спонсоры';
    $TR['en']['community sponsors'] = 'Community sponsors';

    $TR['ru']['talks about'] = '<p>Лучшие докладчики со всей мира, два насыщенных дня. Если вам тоже есть, о чём рассказать отправляйте заявку. Как обычно, продолжительность доклада не должна превышать 50 минут (с учетом вопросов).</p>
<p>Мы рады докладам о C++(11/14/17), STL, Boost, Qt, любых других библиотеках, тестировании и сборке крупных проектов на С++, асинхронности и конкурентности, etc.</p>';
    $TR['en']['talks about'] = '<p>Great guests from around the world, two days full of C++. If you applying for a talk, please, keep im mind that usual duration of a talk is 50 minutes</p>
<p>We\'re glad to talks abot C++, STL, Boost, Qt, any other open source frameworks, testing and building C++ projects, concurrency, etc</p>';

    $TR['ru']['soldout'] = '<br>(Билеты закончились)';
    $TR['en']['soldout'] = '<br>(Sold Out)';

    $locale = get_locale();
    if ($TR[$locale][$text])
        return $TR[$locale][$text];
    else
        return $text;
}
