<?php
    function one() {
        echo 1;
    }
    
    function two() {
        echo 2;
    }

    $foo = 'one';
$$foo = 'two';

$$foo();

?>