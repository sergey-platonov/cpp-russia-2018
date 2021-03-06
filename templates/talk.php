<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Конференция C++ Russia, <?php echo $speakerData->speaker->name; ?> - <?php echo $speakerData->talk->title; ?></title>
    <?php partial(("includes"), $GLOBALS["project_root"]); ?>
</head>
<body class="cpp-r talks">
<header class="cpp-r_header">
    <?php partial(("templates/header"), $GLOBALS["project_root"]); ?>
</header>
<main class="cpp-r_main">
    <!-- -->
    <div class="cpp-b_page-top-description">
        <div class="cpp-r_wrap">
            <div class="cpp-b_sidetext cpp-b_responsive-row-cols">
                <div class="sidetext-left row-col"></div>
                <div class="sidetext-right row-col">
                    <h1 class="cpp-e_block-title mod-big">
                        <?php
                        if ($speakerData->has_custom_header)
                            echo $speakerData->custom_title;
                        else
                            echo $speakerData->talk->title;
                        ?>
                    </h1>
                    <div class="cpp-b_block-text"></div>
                </div>
            </div>
            <div class="cpp-b_sidetext cpp-b_responsive-row-cols">
				<div class="sidetext-left row-col">
                <?php $prefix = $prefix ? $GLOBALS["prefix"] . "/" : ""?>
				<?php if (count($speakerData->speaker->images)): ?>
                <?php foreach ($speakerData->speaker->images as $filename): ?>
                    <img src="<?php echo $preifx . '../' . $filename; ?>" style="width: 15.938rem;">
                <?php endforeach; ?>
                <?php else: ?>
                    <?php $prefix = $prefix ? $prefix : "/"?>
					<img src="<?php echo $prefix;?>speakers_data/photo.png" style="width: 15.938rem;">
                <?php endif ?>
                </div>
                
                <div class="sidetext-right row-col">
                    <div class="cpp-b_block-text">
                        <div class="cpp-e_speaker-name">
                            <?php
                            if (!$speakerData->has_custom_header)
                                echo $speakerData->speaker->name;
                            ?>
                        </div>
                        <?php echo $speakerData->speaker->about; ?>
                        <hr>
                        <div class="cpp-e_speaker-name">
                            <?php
                            if ($speakerData->has_custom_header)
                                echo $speakerData->talk->title;
                            ?>
                        </div>
                        <!-- Полное описание доклада -->
                        <?php echo $speakerData->talk->description; ?>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <?php partial(("partials/sponsors"), $GLOBALS["project_root"]); ?>
</main>
<?php partial(("templates/footer"), $GLOBALS["project_root"]); ?>
</body>
</html>
