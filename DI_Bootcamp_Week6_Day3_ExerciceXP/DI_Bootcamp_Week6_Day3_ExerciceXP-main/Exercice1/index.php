<?php

    function checkVote(int $age) : void {
        if ($age >= 18) {
            $message = "You are eligible";
        } else {
            $message = "You are not eligible";
        }

        echo $message;
    }

    $myAge = 16;
    checkVote($myAge)
?>