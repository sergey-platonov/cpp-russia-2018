<?php
include("partial.php");
include("vendor/autoload.php");


/**
 * return all speaker data in array
 * @return array
 */

function getSpeakerDataByDirName($dir)
{
    $Parsedown = new Parsedown();

    $dirname = basename($dir);

    $root = $GLOBALS['project_root'] . '/';
    $fileContents = file_get_contents($root . "speakers_data/" . $dirname . "/data.json");
    
    if ($fileContents) {
        $jsonData = json_decode($fileContents);
        if (!property_exists($jsonData, "system")) {
			$jsonData->system = false;
			if (property_exists($jsonData, "talk") && $jsonData->talk) 
				$jsonData->talk->description = $Parsedown->text(file_get_contents($root . "speakers_data/" . $dirname . "/talk_description.md"));
			
				
			if (property_exists($jsonData, "speaker") && $jsonData->speaker) {
				$jsonData->speaker->about = $Parsedown->text(file_get_contents($root . "speakers_data/" . $dirname . "/speaker_about.md"));
				$jsonData->speaker->images = glob("speakers_data/" . $dirname . "/*.{gif,jpg,png,jpeg}", GLOB_BRACE);
				$jsonData->speaker->dirname = $dirname;
			}

			if (property_exists($jsonData, "workshop") && $jsonData->workshop)
				$jsonData->workshop->description = $Parsedown->text(file_get_contents($root . "speakers_data/" . $dirname . "/workshop_description.md"));

            $jsonData->has_custom_header = property_exists($jsonData, "custom_title");
		}
		if (property_exists($jsonData, "talk") && $jsonData->talk) 
			$jsonData->talk->track = strtolower($jsonData->talk->track);
        return $jsonData;
    } else {
	print "File " . $root . "  " . $dirname . " not found";
        return false;
    }
}

function getTalkInfo($dir) 
{
	$speakerData = getSpeakerDataByDirName($dir);
    if (!$speakerData) {
		return '';
    } else {
        return '<span class="speaker">'.$speakerData->speaker->name.'</span>'.'<a class="talk-link" href="'.$dir.'">'.$speakerData->talk->title.'</a>';
    }
}

function renderTalkInfo($data) 
{
    if (!$data) {
		return '';
    } else {
        return '<td><span class="speaker">'.$speakerData->speaker->name.'</span>'.'<a class="talk-link" href="'.$dir.'">'.$speakerData->talk->title.'</a></td>';
    }
}

function getWorkshopTitle($prefix, $dir) 
{
    $speakerData = getSpeakerDataByDirName($dir);
    if (!$speakerData) {
		return '';
    } else {
        return '<a href="./'.$prefix.$dir.'">'.$speakerData->workshop->title.'</a>';
    }
}

function getWorkshopTitleWithLink($dir) 
{
	$title = getWorkshopTitle($dir);
    if (!$title) {
		return '';
    } else {
        return '<a href="'.$dir.'">'.$title.'</a>';
    }
}

function getAllSpeakerData($projectRoot)
{
    $speakers = array();
    $schedule = array();
    foreach (glob($projectRoot . '/speakers_data/*', GLOB_ONLYDIR) as $dir) {
		$data = getSpeakerDataByDirName($dir);
		if ($data && property_exists($data, "talk")) {
			if (!$data->system)
				array_push($speakers, $data);

			$schedule[$data->talk->date][$data->talk->time][$data->talk->track] = $data;
		}
    }

    return array(
		"speakers" => $speakers,
		"schedule" => $schedule
    );
}

function renderTalkTeaser($speaker)
{
    if (!$speaker->speaker || !$speaker->speaker->name) {
        # print 'corrupted speaker object';
        return false;
    }
    if (count($speaker->speaker->images) == 0) {
        # print 'no images for ' . $speaker->speaker->name . '<br>';
		return false;
    }

    if ($speaker->talk->description) {
        require __DIR__ . '/templates/talk_teaser.php';
        return true;
    } else {
        # print 'no talks description for ' . $speaker->speaker->name . '<br>';
		return false;
	}
}

function renderTalkTeasers($arrSpeakers)
{
    foreach ($GLOBALS["speakers"] as $speaker) {
        renderTalkTeaser($speaker);
    }
}


function renderDay($schedule, $day)
{
	$timeArr = array_keys($schedule[$day]);
    sort($timeArr);
    $tracks = [];
    foreach ($timeArr as $time) {
        foreach (array_keys($schedule[$day][$time]) as $track) {
            if (!in_array($track, $tracks)) {
                array_push($tracks, $track);
            }
        }
    }
	require __DIR__ . '/templates/program_day.php';
}

function renderMainProgram($projectRoot) 
{
	$data = getAllSpeakerData($projectRoot);
	$schedule = $data["schedule"];
	$days = array_keys($schedule);
	sort($days);
	foreach ($days as $day)
		renderDay($schedule, $day);
		
}

