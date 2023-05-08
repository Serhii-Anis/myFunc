<?php
$string = 'Ученик сидит за партой';
$pattern = '~сидит~';
$res = preg_match($pattern, $string);
echo $res;// возвращает true или false если $pattern содержится в строке $string
