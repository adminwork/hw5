<?php

$string = file_get_contents('http://source-it.com.ua/teachers/');
$string = strip_tags($string);

$pozica = mb_strpos($string,"Татьяна Муращенко");  //находим позицию начального элемента
$pozicb = mb_strpos($string,"Полный перечень наших курсов:"); //находим позицию конечного элемента
$text = $pozicb - $pozica;
$str = mb_substr($string,$pozica,$text);      //вычисляем кусок текста

function calc($str)
{
//    $str = str_replace(array('_', '-', '—', '(', ')', '“', '”', '«', '»', '.', ':', '+', '/'), ' ', trim($str));
//    $str=preg_replace('  ', ' ', $str);
    //   var_dump($str);
    //    var_dump($a);

    $arr = explode(" ", $str); //разбиваем строку на массив
    //    print_r($arr);
    //    echo "<br>";
//    function trim_value(&$value)     //убираем символы из элементов массива
//    {
//        $value = trim($value, "()“”«».:-—,");
//    }
//
//    array_walk($arr, 'trim_value');
    //    var_dump($arr);
    preg_match('#Преподаватели Source IT(.*)Полный перечень наших курсов:#is', $string, $matches);
    //    var_dump($matches);
    $arr   = str_word_count($matches[1],2,"АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя«»“”ä");
    //    print_r($c);
    $result = count($arr);              //количество слов является количество элементов массива
    echo 'Количество слов:', $result;
    echo "<br>";

    $tmp = array_count_values($arr);
    $max = max($tmp);
    $result = array_search($max, $tmp);
        echo 'Самый повторяющийся элемент массива: ', $result, '. Он повторяется ', $max, ' раз(а).';
        echo "<br>";
    //var_dump($tmp);
    $min = min($tmp);
    //var_dump($min);
        echo 'Самые редкие слова, повторяются ' . "$min" . ' раз:';
    $tmpmin = array_flip($tmp);
        foreach ($tmpmin as $key => $value) {
            if ($key = $min) ;
            $arrmin = $value;
            echo "$arrmin ,";
        }

    echo '<table border="1" cellpadding="5">';   //таблица слов с кол-вом повторений
    echo "<tr>";
    echo "<td><b>Слово</b></td>";
    echo "<td><b>Количество</b></td>";
    echo "</tr>";
        foreach ($tmp as $key => $value) {
            echo "
                <tr>
                    <td>$key</td>
                    <td>$value</td>
                </tr>";
        }
    echo "</table>";
}



calc($str);