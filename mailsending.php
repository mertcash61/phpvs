<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$aa=$_POST['aa'];
$ab=$_POST['ab'];
$p=$_POST['p'];
$mag=" ".$a." ".$b." ".$c." ".$d." ".$e;
$to="Gmail you will write to"
$sub=$a;
$mag = wordwrap($map, 70);
#echo $map;

$r=mail($to,$sub,$mag);

    if( $r == true ){
        echo"script>alert{'mailsent'};<script>"
    }else{
        echo"script>alert{'raılure'};<script>"
    }

?>
