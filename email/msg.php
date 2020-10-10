<?php

function msg($type, $title, $description, $expiry)
{
    $msg = '<html> <head> <style>span, p{color: #555555;}</style> </head> <img height="200" width="300" src="https://res.cloudinary.com/domfsneqv/image/upload/v1593002664/pjx_hxfy5f.png"> <br/> <br/> <span style="font-size: 22px;">Soon to Due ('.$type.')</span> <br/> <br/> <span>An item in your '.$type.' section is expiring soon:</span> <br/> <br/> <div style="display: flex;"> <p style="min-width: 100px;"><strong>Title</strong></p><p>'.$title.'</p></div><div style="display: flex;"> <p style="min-width: 100px;"><strong>Description</strong></p><p>'.$description.'</p></div><div style="display: flex;"> <p style="min-width: 100px;"><strong>Expiry Date</strong></p><p>'.$expiry.'</p></div></html>';
    
    $subject = "Soon-to-Due (".$type.")";
}
?>
