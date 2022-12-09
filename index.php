<?php

$arr = [1, 7, 4, 2, 8, 3, 7, 10, 99, 4, -4, 5];
$arr2 = [1, 7, 4, 2, [8, 30, 7], 10, 99, 4, -4, 5];
$str = "Lorem ipsum, dolor sit amet consectetur adipisicing elit.
    Expedita ipsum odit debitis quos sed inventore eaque vel?
    Atque iure impedit necessitatibus voluptate aspernatur!
    Quos vero doloremque eius nemo odio enim?";


// min & max =====================================
function min_max($arr){
    $min = $arr[0];
    $max = $arr[0];
    for ($i = 1; $i < count($arr); $i++){
        if ($arr[$i] > $max ){
            $max = $arr[$i];
        }
        if ($arr[$i] < $min ){
            $min = $arr[$i];
        }
    }
    echo "Min: ${min}, Max: ${max}";
}
min_max($arr);
echo "</br></br>";


// chars replacing ===============================
function charReplacing($str){
    for ($i = 0; $i < strlen($str); $i++){
        // четные символы в строке будут иметь нечётный индекс
        if ($i % 2 != 0){ 
            $str[$i] = '*';
        }
    }
    return $str;
}
echo charReplacing($str);
echo "</br></br>";


// sum of elements ===============================
function sumOfElements($arr){
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++){
        // Проверяю, что содержимое переменной массив или объект, реализующий Countable
        // Использую рекурсию для вложенного сложения
        if (is_countable($arr[$i])){
            $sum += sumOfElements($arr[$i]);
        } else {
            $sum += $arr[$i];
        }
    }
    return $sum;
}
echo sumOfElements($arr);
echo "</br>";
echo sumOfElements($arr2);
echo "</br></br>";


// reverse =======================================
function reverse($arr){
    $len = count($arr);
    // вместо создания дополнительного массива создаю временную переменную $temp
    // для ускорения работы прохожусь по половине массива, меняя первый элемент на последний и т.д.
    for($i = 0; $i < $len/2; $i++){
        $temp = $arr[$i];
        $arr[$i] = $arr[$len - $i-1];
        $arr[$len - $i-1] = $temp;
    }
    
    print_r($arr);
}
reverse($arr);
echo "</br></br>";


// matrix transposition ==========================




?>