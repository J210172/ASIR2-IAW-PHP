<?php

function fact($n) {
    return $n > 1 ? fact($n-1) * $n : $n;
}

Echo "Factorial: ". fact(5);