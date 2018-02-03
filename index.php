<?php
include ("./loader.php");

$GLOBALS['project_root'] = __DIR__;
$GLOBALS["speakers"] = getAllSpeakerData(__DIR__)["speakers"];

$router = new AltoRouter();
// map homepage
function map_home() {
    $locale = htmlspecialchars($_GET["lang"]);
    if ($locale && $locale != "ru")
        $GLOBALS["locale"] = "en";
    else
        $GLOBALS["locale"] = "ru";
    require __DIR__ . '/main.php';
}

$router->map( 'GET',  '/[i:year]/', map_home );
$router->map( 'GET',  '/', map_home );

// map all talks page
function map_all_talks($year) {
    $GLOBALS["prefix"] = '';
    require __DIR__ . '/templates/talks.php';
}

function map_all_talks_year($year) {
    $GLOBALS["prefix"] = '/' . basename(__DIR__);
    require __DIR__ . '/templates/talks.php';
}

$router->map( 'GET', '/[i:year]/talks', map_all_talks_year );
$router->map( 'GET', '/talks', map_all_talks );

function map_talk_detalis_impl($speaker) {
    $speakerData = getSpeakerDataByDirName($speaker);
    if (!$speakerData) {
        header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        tr('not found');
    } else {
        require __DIR__ . '/templates/talk.php';
    }
}

function map_talk_details_year($year, $speaker) {
    $GLOBALS["prefix"] = '/' . basename(__DIR__);
    map_talk_detalis_impl($speaker);
}

// map talk details page
function map_talk_details($speaker) {
    $GLOBALS["prefix"] = '';
    map_talk_detalis_impl($speaker);
}

$router->map( 'GET', '/[i:year]/talks/[*:speaker]', map_talk_details_year );
$router->map( 'GET', '/talks/[*:speaker]', map_talk_details );

// map workshop details page
function map_workshop_details_impl($speaker) {
    $speakerData = getSpeakerDataByDirName($speaker);
    if (!$speakerData) {
        header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        tr('not found');
    } else {
        require __DIR__ . '/templates/workshop.php';
    }
}

function map_workshop_details_year($year, $speaker) {
    $GLOBALS["prefix"] = '/' . basename(__DIR__);
    map_workshop_details_impl($speaker);
}

function map_workshop_details($speaker) {
    $GLOBALS["prefix"] = '';
    map_workshop_details_impl($speaker);
}

$router->map( 'GET', '/[i:year]/workshops/[*:speaker]', map_workshop_details_year );
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
