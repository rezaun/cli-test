<?php

$number = rand(1,100);

while(true){
    $user_input = (int) readline(prompt: "Enter a number: ");

    if($user_input > $number){
        printf(format: "try a lower n umber. \n");
    }else if($user_input <  $number) {
        printf(format: "try a bigger number. \n");
    }else{
        printf(format: "congrates ! You guessed it right !1");
    }
}
