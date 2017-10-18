<?php

$today = strtotime('now');
function checkSeason($date)
{
    $spring = strtotime('March 20');
    $summer = strtotime('June 20');
    $fall = strtotime('September 20');
    $winter = strtotime('December 21');
    if($date > $spring and $date < $summer)
    {
        echo "lente: 21 maart t.e.m. 20 juni";
    }
    elseif($date > $summer and $date < $fall)
    {
        echo "zomer: 21 juni t.e.m. 20 september";
    }
    elseif($date > $fall and $date < $winter)
    {
        echo "herfst: 21 september t.e.m. 20 december";
    }
    elseif($date > $winter and $date <$spring)
    {
        echo "winter: 21 december t.e.m. 20 maart.";
    }

}
checkSeason($today);
