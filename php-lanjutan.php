<?php
echo "1. pengulangan for <br>" ;
$nama = "Chrissya";
$i=0; $no=5;

for ($i; $i<$no; $i++) {
    $n=$i+1;
    echo $n. "<br/>"; 
}

echo "<br> 2. pengulangan while <br>";
$i=0; $no=5;
while ($i < $no) {
    $n=$i+1;
    echo $n. "<br/>";
    $i++; 
} 

echo "<br> 3. pengulangan do while <br>";
$i=0; $no=5;
do {
    $n=$i+1; 
    echo $n. "<br/>";
    $i++;
} while ($i < $no);

/*
echo "<br>array<br>";
$data = array('chrissya', 'kharra', 'vicky', 'vicko', 'azka');
foreach ($data as $value) {
    echo $value"<br>";
}
*/

$nama ="putu";
if ($nama == "putu") {
    echo $nama." adalah orang bali <br>";
} else if ($nama == "budi"){
    echo $nama." adalah orang jawa";
} else {
    echo $nama." orang mana?";
}

$n=1;
if ($n == 2) {
    echo $n." nomor satu <br>";
} else {
    echo $n."bukan nomor satu";
}

<from>


?>