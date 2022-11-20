<?php

function create_id(int $number,int $multiplier){
    $text = '';

    if($number <= 5){
        $number = 6;
    }
    if($multiplier == null || $multiplier = ''){
        $multiplier = 50;
    }
    
    $randnumber = rand($number * 5.55554545,500000000);
    $random = $text . $randnumber .'qwertyu' . $randnumber % 30 . 'iopasd' . $randnumber / 2 . 'fghjklzxcvbnm' . rand(1, $randnumber);
    $hash = "/[abcdefghijklmnopqrstuvwxyz]/i";
    $final_hash_one = preg_replace($hash,"pokliuhnfmbuvydtvrcesdwxqzagsvyenvobpwmvbdegfygkwmcp" . $random . $randnumber,$random);

    $final_hash_two = preg_replace($hash,$text,$random);

    $final_hash = str_split($final_hash_two);
    $another = str_split($final_hash_one);

    for($i = 0; $i < count($final_hash); $i++){
        return implode(rand($final_hash[$i],count($final_hash)),$another);
    }
}