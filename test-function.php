<?php
    function countDown(int $top){
    while($top > 0){
        print "$top..";
        $top--;
    }
    print '<br/>end';
}