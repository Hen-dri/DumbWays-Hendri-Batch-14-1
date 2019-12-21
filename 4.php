<html>
<head>
<title>Soal No 4</title>
</head>
<body>  


<?php

$sort_data1 = ["d", "c", "e", "b", "a" ];
$sort_data2 = ["k", "i", "j"];
$sort_data3 = ["g", "h", "i", "j" ];
$sort_data4 = ["a", "c", "b", "e", "d" ];
$sort_data5 = ["g", "e", "f" ];
 
sort($sort_data1);
sort($sort_data2);
sort($sort_data3);
sort($sort_data4);
sort($sort_data5);

echo "1. Data Yang Telah diurutkan =<br>  ";
foreach($sort_data2 as $element) {
    echo str_pad($element, 0)." - " ;
}
print ("<br>");
foreach($sort_data1 as $element) {
    echo str_pad($element, 0)." - " ;
}print ("<br><br>");
echo "2. Data Lain Yang Telah diurutkan =<br>  ";
foreach($sort_data5 as $element) {
    echo str_pad($element, 0)." - " ;
}
print ("<br>");
foreach($sort_data3 as $element) {
    echo str_pad($element, 0)." - " ;
}
print ("<br>");
foreach($sort_data4 as $element) {
    echo str_pad($element, 0)." - " ;
}
 