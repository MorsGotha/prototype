<?php

$query = mysql_query("SELECT * FROM notes WHERE status='visible' ORDER BY id DESC");

$notes = '';
$left='';
$top='';
$zindex='';

while($row=mysql_fetch_assoc($query))
{
    $noteUrl = explode("?", $row['url']);       
    if (!isset($noteUrl[1])) {
        $noteUrl = array("main=home", "sub=news");
    }
    else {
        $noteUrl = explode("&", $noteUrl[1]);
    }
    
    if ($noteUrl[0]=="main=$main" && $noteUrl[1]=="sub=$sub") {

        list($left,$top,$zindex) = explode('x',$row['xyz']);

        $notes.= '
        <div class="note '.$row['color'].'" style="left:'.$left.'px;top:'.$top.'px;z-index:'.$zindex.'">
                '.htmlspecialchars($row['text']).'
                <div class="author">'.htmlspecialchars($row['name']).'</div>
                <span class="data">'.$row['id'].'</span>
        </div>';
    }
}

?>