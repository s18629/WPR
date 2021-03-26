<?php
function starsPattern($stars) {
    for($i = 1; $i <= $stars; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo ("*");
        }
        echo ('<br/>');
    }
    for($i = $stars; $i >= 1; $i--) {
        for($j = 1; $j <= $i; $j++) {
            echo ("*");
        }
        echo ('<br/>');
    }
    for($i = $stars; $i >= 1; $i--) {
        for($j = 1; $j <= $stars-$i; $j++) {
        }
        for($j = 1; $j <= $i; $j++) {
            echo ("*");
        }
        echo ('<br/>');
    }
    for($i = 1; $i <= $stars; $i++) {
        for($j = 1; $j <= $stars-$i; $j++) {
        }
        for($j = 1; $j <= $i; $j++) {
            echo ("*");
        }
        echo ('<br/>');
    }
}
starsPattern(10);
?>