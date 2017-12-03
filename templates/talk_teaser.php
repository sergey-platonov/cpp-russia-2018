<div class="cpp-b_talk row-col">
    <div class="talk-head">
        <div class="talk-date-track">
            <div class="date">
                <?php echo $speaker->talk->date; ?>
            </div>
            <div class="track">
                <?php echo ucwords($speaker->talk->track); ?><br>
                <?php echo $speaker->talk->time; ?>
            </div>
        </div>
        <div class="talk-speaker-photo">
            <img src="<?php echo $speaker->speaker->images[0]; ?>" alt="<?php echo $speaker->speaker->name; ?>">
        </div>
    </div>
    <div class="talk-speaker-name">
        <?php echo $speaker->speaker->name; ?>
    </div>
    <div class="talk-content-fixed">
        <div class="talk-title">
            <div class="cpp-e_title-small">
                <?php echo $speaker->talk->title; ?>
            </div>
        </div>
        <div class="talk-description">
            <?php echo $speaker->talk->description; ?>
        </div>
    </div>

    <div class="talk-footer">
        <a class="talk-link" href="<?php echo "/talks/".$speaker->speaker->dirname; ?>">Подробнее >></a>
    </div>
</div>
