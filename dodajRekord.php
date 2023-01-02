<?php
$host='localhost';
$user='root';
$password='';
$db='ogloszenia';

$conn=mysqli_connect($host,$user,$password,$db);
if(!$conn){
    echo 'coś nie tak';
}
else{
    $kategoria=$_POST['kategoria'];
    $podkategoria=$_POST['podkategoria'];
    $tytul=$_POST['tytul'];
    $tresc=$_POST['tresc'];
}


$sql='INSERT into ogloszenie values("",1,'.$kategoria.','.$podkategoria.',"'.$tytul.'","'.$tresc.'")';
mysqli_query($conn,$sql);
mysqli_close($conn);
?>