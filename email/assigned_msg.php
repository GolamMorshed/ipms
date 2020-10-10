<?php
$msg = '
<html>
    <head>
        <style>
            span, p {
                color: #555555;
            }
        </style>
    </head>
    <img height="200" width="300" src="https://res.cloudinary.com/domfsneqv/image/upload/v1593002664/pjx_hxfy5f.png">
    <br />
    <br />
    <span style="font-size: 22px;">Work Order Request</span>
    <br />
    <br />
    <span>You have been assigned to the current Work Order Request:</span>
    <br />
    <br />
    <div style="display: flex;">
        <p style="min-width: 100px;"><strong>Development</strong></p>
        <p>'.$dev.'</p>
    </div>
    <div style="display: flex;">
        <p style="min-width: 100px;"><strong>Block</strong></p>
        <p>'.$block.'</p>
    </div>
    <div style="display: flex;">
        <p style="min-width: 100px;"><strong>Unit</strong></p>
        <p>'.$unit.'</p>
    </div>
    <div style="display: flex;">
        <p style="min-width: 100px;"><strong>Title</strong></p>
        <p>'.$title.'</p>
    </div>
    <div style="display: flex;">
        <p style="min-width: 100px;"><strong>Description</strong></p>
        <p>'.$description.'</p>
    </div>
    <div style="display: flex;">
        <p style="min-width: 100px;"><strong>Category</strong></p>
        <p>'.$category.'</p>
    </div>
    <div style="display: flex;">
        <p style="min-width: 100px;"><strong>Start Date</strong></p>
        <p>'.$start_date.'</p>
    </div>
    <div style="display: flex;">
        <p style="min-width: 100px;"><strong>End Date</strong></p>
        <p>'.$end_date.'</p>
    </div>
</html>';

$subject = "Work Order Request";
?>
