<?php
header("Content-type: text/css");

function create_animation_frame($num)
{

$hex_values = array(
    '0','1','2','3','4','b','c','d','e','f');
  
    $current_hex = "";

    for($i=0; $i<3; $i++)
    {
        $rand = rand(0,15);
        $current_hex .= $hex_values[$rand];
    }

    return $num."% { background: #".$current_hex."; }";

}
?>
@-webkit-keyframes disco1 { 
    <?
    for($i=0;$i<=100;$i++)
    {
        echo create_animation_frame($i);
        $i++; // Add another value to $i. Remove line = 100 frames.
    }
    ?> 
}
@-webkit-keyframes disco2 { 
    <?
    for($i=0;$i<=100;$i++)
    {
        echo create_animation_frame($i);
        $i++; // Add another value to $i. Remove line = 100 frames.
    }
    ?> 
}
@-webkit-keyframes disco3 { 
    <?
    for($i=0;$i<=100;$i++)
    {
        echo create_animation_frame($i);
        $i++; // Add another value to $i. Remove line = 100 frames.
    }
    ?> 
}
@-webkit-keyframes disco4 { 
    <?
    for($i=0;$i<=100;$i++)
    {
        echo create_animation_frame($i);
        $i++; // Add another value to $i. Remove line = 100 frames.
    }
    ?> 
}
@-webkit-keyframes disco5 { 
    <?
    for($i=0;$i<=100;$i++)
    {
        echo create_animation_frame($i);
        $i++; // Add another value to $i. Remove line = 100 frames.
    }
    ?> 
}
@-webkit-keyframes disco { 
    <?
    for($i=0;$i<=100;$i++)
    {
        echo create_animation_frame($i);
        $i++; // Add another value to $i. Remove line = 100 frames.
    }
    ?> 
}

?>