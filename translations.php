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
    $TR['en']['best speakers'] = 'best speakers';


    $TR['ru']['minutes'] = 'минут информации<br>для опытных<br>разработчиков';
    $TR['en']['minutes'] = 'minutes<br>for experienced<br>developers';

    $TR['ru']['title'] = 'Конференция C++ Russia, 19-21 апреля 2018';
    $TR['en']['title'] = 'C++ Russia 2018, 19-21 of April 2018';

    $TR['ru']['title with br'] = 'Конференция C++ Russia<br>Санкт-Петербург<br>19-21 апреля 2018';
    $TR['en']['title with br'] = 'C++ Russia<br>Saint Petersburg<br>19-21 April 2018';

    $TR['ru']['not found'] = 'Запрашиваемая страница не найдена';
    $TR['en']['not found'] = 'Requested page not found';

    $TR['ru']['about'] = 'О конференции';
    $TR['en']['about'] = 'About';

    $TR['ru']['about conf'] = '<p>Конференция «C++ Russia» с блинами и матрёшками! Как всегда, лучшие докладчики<br>
со всей страны на два дня. Конференция ориентирована на опытных разработчиков, никаких вводных лекций!</p>';
    $TR['en']['about conf'] = '<p>C++ Russia with bliny and matryoshkas! Best speakers from all over Russia for two days.
 The conference is for experienced developers!</p>';

    $TR['ru']['location'] = '<p>Место проведения: Санкт-Петербург, ул. Кораблестроителей, 14, гостиница Прибалтийская.</p>';
    $TR['en']['location'] = '<p>Location: Saint Petersburg, Park Inn Pribalitiyskaya.</p>';

    $TR['ru']['community'] = '<p>В течении года сообщество проводит встречи в разных городах России: Москве, Санкт-Петербурге, 
Новосибирске, Екатеринбурге, Нижнем Новгороде, Саратове.<br>На встречах выступают докладчики из разных городов и стран.</p>';
    $TR['en']['community'] = '<p>By now the Group has set up meetings in several cities of Russia: Moscow, Saint-Petersburg, 
Yekaterinburg, Nizhny Novgorod, Kazan and Saratov. We invite speakers from places other than meeting site.</p>';

    $TR['ru']['keynotes'] = 'Открывать конференцию будет Jon Kalb, разработчик с 25-летним стажем<br>
В течении этого времени успел поработать в Amazon, Microsoft, Netscape,<br>
Yahoo и других компаниях. Jon -- организатор конференции CppCon. Автор книги <br>
C++ Today: The Beast is Back.';
    $TR['en']['keynotes'] = 'Keynote speaker is Jon Kalb. He has been programming in C++ for two and a half decades.<br> 
During the last two decades he has written C++ for Amazon, Apple, Dow Chemical, Intuit, Lotus, Microsoft, Netscape, Sun, 
Yahoo! and a number of companies that you\'ve not heard of. Jon is chairman of CppCon and author of the \'C++ Today: The Beast is Back\'';

    $TR['ru']['apply'] = '<p><strong>Подать заявку на доклад можно<br>до 15 марта 2018 года.</strong></p>
<p>Как обычно, продолжительность доклада не должна превышать 50 минут (с учетом вопросов). Мы рады докладам о C++(11/14/17), 
STL, Boost, Qt, любых других библиотеках, тестировании и сборке крупных проектов на С++, асинхронности и конкурентности, etc.</p>';
    $TR['en']['apply'] = '<p><strong>You can apply until<br>15 of March 2018.</strong></p>
<p>Duration of a talk can not exceed 50 minutes (with questions). We\'re pleased to hear talks about C++, STL, Boost, Qt 
and any other libraries. About testing and building C++ projects. About concurrency, lock-free and any other hype word you hear 
next to C++ these days.</p>';

    $TR['ru']['talks'] = 'Доклады';
    $TR['en']['talks'] = 'Talks';

    $TR['ru']['apply bubble'] = 'Хочу стать<br>спикером!';
    $TR['en']['apply bubble'] = '<font size="6">Apply!</font>';

    $TR['ru']['all talks'] = 'Все доклады';
    $TR['en']['all talks'] = 'All talks';

    $TR['ru']['contacts'] = 'Контакты';
    $TR['en']['contacts'] = 'Contacts';

    $TR['ru']['if you have questions'] = '<p>Если у Вас есть вопросы,<br>их можно задать по телефону или почте </p>';
    $TR['en']['if you have questions'] = '<p>If you have questions,<br>you can ask them via phone or email</p>';

    $TR['ru']['about'] = 'О конференции';
    $TR['en']['about'] = 'About';

    $TR['ru']['schedule'] = 'Программа';
    $TR['en']['schedule'] = 'Schedule';

    $TR['ru']['tickets'] = 'Билеты';
    $TR['en']['tickets'] = 'Tickets';

    $TR['ru']['sponsors'] = 'Спонсоры';
    $TR['en']['sponsors'] = 'Sponsors';

    $TR['ru']['tickets info'] = 'В этом году наших слушателей ждут<br> полезные мастерклассы, а для тех,<br>
кто не может приехать на<br> конференцию, мы как всегда<br>
организовали онлайн трансляцию. Присоединяйтесь!<br>
Как всегда действует студенческая программа. <br>
Для получения скидки пишите на <br><a href="mailto:students@cpp-russia.ru">students@cpp-russia.ru</a>';
    $TR['en']['tickets info'] = 'Great talks, useful workshops<br>if you can\'t make it, online tickets are available';

    $TR['ru']['prices'] = 'Цены';
    $TR['en']['prices'] = 'Prices';

    $TR['ru']['about schedule'] = 'Первый день конференции 19 апреля -- это день мастер-классов. Вы можете посетить один четыре мастер-классов на ваш выбор. 
    Обратите внимание: два мастер-класса проходят на английском языке. Мастер-класс это практическое занятие под руководством опытного программиста. Для работы
    вам понадобится ноутбук, более подробные треования есть в описании каждого мастер-класса. На этот день продаётся отдельный билет.';
    $TR['en']['about schedule'] = '';

    $TR['ru']['more'] = 'Подробнее >>';
    $TR['en']['more'] = 'More >>';

    $TR['ru']['workshop registration'] = 'Регистрация на мастер-классы';
    $TR['en']['workshop registration'] = 'Registration for a workshops';

    $TR['ru']['preregistration'] = 'Предрегистрация на конференцию';
    $TR['en']['preregistration'] = 'Pre-registration for a conference';

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
    $TR['en']['ticket'] = 'Conference Ticket';

    $TR['ru']['workshop ticket'] = 'Мастер-класс';
    $TR['en']['workshop ticket'] = 'Workshop ticket';

    $TR['ru']['online ticket'] = 'Онлайн';
    $TR['en']['online ticket'] = 'Online ticket';

    $TR['ru']['9500₽'] = '9500₽';
    $TR['en']['9500₽'] = '160€';

    $TR['ru']['8000₽'] = '8000₽';
    $TR['en']['8000₽'] = '130€';


    $TR['ru']['3000₽'] = '3000₽';
    $TR['en']['3000₽'] = '60€';

    $TR['ru']['10500₽'] = '10500₽';
    $TR['en']['10500₽'] = '180€';

    $TR['ru']['9000₽'] = '9000₽';
    $TR['en']['9000₽'] = '150€';

    $TR['ru']['11500₽'] = '11500₽';
    $TR['en']['11500₽'] = '200€';

    $TR['ru']['10000₽'] = '10000₽';
    $TR['en']['10000₽'] = '170€';

    $TR['ru']['12500₽'] = '12500₽';
    $TR['en']['12500₽'] = '220€';

    $TR['ru']['11000₽'] = '11000₽';
    $TR['en']['11000₽'] = '190€';

    $TR['ru']['2018-02-01'] = 'до 31.01.18';
    $TR['en']['2018-02-01'] = '';

    $TR['ru']['2018-03-01'] = 'с 01.02.18 по 28.02.18';
    $TR['en']['2018-03-01'] = '01.02.18 -- 28.02.18';

    $TR['ru']['2018-04-01'] = 'с 01.03.18 по 31.03.18';
    $TR['en']['2018-04-01'] = '01.03.18 -- 31.03.18';

    $TR['ru']['after 2018-04-01'] = 'с 01.04.18 по 19.04.18';
    $TR['en']['after 2018-04-01'] = '01.04.18 -- 19.04.18';

    $locale = get_locale();
    if ($TR[$locale][$text])
        return $TR[$locale][$text];
    else
        return $text;
}
