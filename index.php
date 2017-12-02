<?php
include ("./loader.php");

$GLOBALS['project_root'] = __DIR__;

$router = new AltoRouter();
// map homepage
function map_home($year) {
    require __DIR__ . '/main.php';
}

$router->map( 'GET',  '/[i:year]/', map_home );
$router->map( 'GET',  '/', map_home );

// map all talks page
function map_all_talks($year) {
    if ($year)
        $GLOBALS["prefix"] = '/' . basename(__DIR__);
    else
        $GLOBALS["prefix"] = '';

    $arrSpeakers = getAllSpeakerData(__DIR__)["speakers"];
    require __DIR__ . '/templates/talks.php';
}
$router->map( 'GET', '/[i:year]/talks', map_all_talks );
$router->map( 'GET', '/talks', map_all_talks );

// map talk details page
function map_talk_details($year, $speaker) {
    if (!$speaker) {
        $speaker = $year;
        $GLOBALS["prefix"] = '';
    } else {
        $GLOBALS["prefix"] = '/' . basename(__DIR__);
    }

    $speakerData = getSpeakerDataByDirName($speaker);
    if (!$speakerData) {
        header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        echo "Запрашиваемая страница не найдена";
    } else {
        require __DIR__ . '/templates/talk.php';
    }
}

$router->map( 'GET', '/[i:year]/talks/[*:speaker]', map_talk_details );
$router->map( 'GET', '/talks/[*:speaker]', map_talk_details );

// map workshop details page
function map_workshop_details($year, $speaker) {
    if (!$speaker) {
        $speaker = $year;
        $GLOBALS["prefix"] = '';
    } else {
        $GLOBALS["prefix"] = '/' . basename(__DIR__);
    }

    $speakerData = getSpeakerDataByDirName($speaker);
    if (!$speakerData) {
        header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        echo "Запрашиваемая страница не найдена ";
    } else {
        require __DIR__ . '/templates/workshop.php';
    }
}

$router->map( 'GET', '/[i:year]/workshops/[*:speaker]', map_workshop_details );
$router->map( 'GET', '/workshops/[*:speaker]', map_workshop_details );

// match current request url
$match = $router->match();

// call closure or throw 404 status
if( $match && is_callable( $match['target'] ) ) {
    call_user_func_array( $match['target'], $match['params'] );
} else {
    print $_SERVER['REQUEST_URI'];
    // no route was matched
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
