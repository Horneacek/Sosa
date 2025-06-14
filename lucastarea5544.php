 
 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Deda starý</title>
    
</head>
<body text="black" >
<style>
body {
    background-color: gray ;
    background-position: center;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            height: 100%;
            font-family: Arial, Helvetica, sans-serif;
}
</style>
<?php
echo "trabajo 1 mayor, menor o igual";
$e=77;
$s=8;

if ( $e == $s ) {
	echo "son iguales";
	echo "<br> ";
} elseif ($e > $s) {
    echo "<br>";
	echo  "$e  es mayor que  $s" ;
	echo "<br>";
} elseif  ($e<$s) {
	echo "$s es mayor a $e" ;
    echo "<br>";
}
echo "<br>";
echo "trabajo 2 media";
$num1=9;
$num2=8;
$num3=7;
echo "<br>";
$media = ($num1 + $num2 + $num3) /3; 
echo "la media es $media " ;
echo "<br>";
echo "<br>";
echo "trabajo 3 PI";
$PI = 3.1415; //valor de PI (float)
$radio = 15; //radio de un circulo (intenger)
//podemos hacer opperaciones matematicas combinando intenger y float
echo "<br>";
$area = $PI * $radio * $radio;
echo "$area";
echo "<br>";
echo "<br>";
echo "trabajo 4 false true";
 //area del circulo
//supongamos que hoy es martes
echo "<br>";
$ayer_fue_lunes = TRUE;
echo "$ayer_fue_lunes";
$ayer_fue_jueves = FALSE;
echo ($ayer_fue_jueves);
echo "<br>";
echo "<br>";
echo "trabajo 4 categorias";
$s=22;
echo "<br>";
if ($s>18) {
    echo "adulto";
}elseif ($s>13) {
    echo "jovenes";
}elseif ($s<13) {
    echo "junior";
}
/*else no pregunta si no se cumple lo hace if k(jj) si no se comple else echo */
echo "<br>";
echo "<br>";
echo " trabajo 6";
$color="#FF0000";
echo "<br>";
$r=5;
$j=20;

if ($r>$j) {
    $s=$r/$j;
 echo " se divide $s";

}else {
    $y=$j+$r;
    echo "se suma $y";
}

echo "<h1> TRabajo 1 <h1>";

	$A=23;
	$B=12;
	if ($A==$B) {
		echo "<h2>son iguales </h2>";
	} else {
		echo "<h2>son distintos </h2>";
	}
    echo "<br>";
    echo "trabajo 2";
echo "<br>" ;
    $a="s";
    $b="n";
    if ($a=="s" && $b=="n") {
        echo "se ingresan corectamente las letras";
    } else {
        echo "no";
    }
        echo "<br> ";
        echo "<br> ejercicio 3 ";
        $s=2;
      $o=$s+1;
      echo "<br> ";
      echo "trabajo 4";
echo "<br>" ;
      echo "el siguiente de $s es $o";
      echo "<br> ";
      $q=3;
      $w=$q-1;
      echo "el anterior de $q es $w";
      echo "<br> ";
      echo "trabajo 5";
echo "<br>" ;
      $e=1;
      $s=$e+5;
      $f=$e+10;
      echo "<br> ";
      echo "$e a 5 es $s"; echo "<br> ";
      echo "$e a 10 es $f";
      echo "<br> ";
      echo "trabajo 6";
      echo "<br>" ;
      $a=2;
      $b=1;
      echo "<br> ";
      if ($a==$b) {
        echo "empataron";
      } elseif ($a>$b) {
        echo "ganò el equipo  a con $a goles";
      } else {
        echo "ganò b";
      }
      echo "<br> ";
      echo "trabajo 7";
echo "<br>" ;
      $f=2;
      $d=2;
      $s=$f/$d;
      if ($f==0 or $d==0) {
        echo "no se dividen";
      } else {
        echo "se dividen el resultado es : $s";
      }
      echo "<br> ";
      $q=2;
      $w=1;
      $p=$q-$w;
      echo "<br> ";
      echo "trabajo 8";
echo "<br>" ;
      if ($p<0) {
        echo "error";
      } else {
        echo "se restan, resultado  $p";
      }
      echo "<br> ";
      $a=1;
      $n=3;
      $s=$a/$n;
      $k=$a+$n;
      echo "trabajo 9";
echo "<br>" ;
    if ($a>$n) {
        echo "se divide $s";
    } else {
        echo "nos e didive";
    }
   if ($n>$a) {
    echo "suma $k";
   }

   //errrror 99
   echo "<br> ";
   echo "trabajo 10";
echo "<br>" ;
   $w=6;
   $t=3;
   $g=$w+$t;
   $s=$g-3;
   $f=$g+2;
   if ($g>12) {
    echo "suma es $g se resta 3 resultado : $s";
   } elseif ($g<5) {
    echo "se suma $g a $f";
   }else {
    echo "la suma $g";
   } 
   echo "<br> ";
   $s=3;
   $e=3;
   echo "<br> ";
   echo "trabajo 11";
echo "<br>" ;
   if ($s>$e) {
   echo "$s es mayor que $e";
   } else {
    echo "$e es mayor que $s";
   }
   echo "<br> ";
   $s=2;
   $e=2;
   echo "<br> ";
   echo "trabajo 12";
echo "<br>" ;
   if ($s==$e) {
  echo "son iguales";
   } elseif ($s>$e) {
    echo "$s es mayor que $e";
   }else {
    echo "$e es mayor que $s";
   }
   echo "<br> ";
$h=2;
$d=4;
echo "<br> ";
echo "trabajo 13";
echo "<br>" ;
if ($h>$d) {
echo "$d, $h";
} else {
 echo "$h, $d";
}
echo "<br> ";
$q=1;
echo "<br> ";
echo "trabajo 14";
echo "<br>" ;
for ($q=1; $q <11 ; $q++) { 
  echo $q."<br>";
}
echo "<br> ";
echo "trabajo 15";
echo "<br>" ;
for ($w=10; $w > 1 ; $w--) { 
  echo $w."<br>";
}
echo "<br> ";
echo "trabajo 16";
echo "<br>" ;
for ($w=1; $w < 101 ; $w++) {


  echo $w."<br>";
}
echo "<br> ";
echo "trabajo 17";
echo "<br>" ;
for ($q=100; $q >0 ; $q--) { 
  echo $q."<br>";
}
echo "<br> ";

$a=2;
$b=3;
$c=-1;
echo "trabajo 18";
echo "<br>";
 if ($a>0) {
   echo "$a positivo";
  
 }else {
  echo "$a negativo";
 }if ($b>0) {
  echo "$b es positivo";
 }else {
  echo "$b negativo";
 }if ($c>0) {
  echo "$c es positivo";
 }else {
  echo "$c negativo";
 }
 echo "<br> ";
 $a=8;
 $b=9;
 $c=7;
 $r=$a+$b+$c;
 $s=$r/3;
 echo "<br> ";
 echo "trabajo 19";
 echo "<br> ";
 echo "el promedio es $s";
 echo "<br> ";
 echo "<br> ";
 echo "trabajo 20";
 echo "<br> ";
 //AREEGLAtrr20
 $a=16;
 $b=14;
 $h=$a+$b;
 if ($h%3==0) {
    echo "es multiplo de 3: $h";
 } else {
    echo "no es multiplo de 3: $h";
 }
 echo "<br> ";
 echo "<br> ";
 echo "<br>" ;
 echo "trabajo 21";
echo "<br>" ;
$a=102;
$b=2;
$j=$a-$b;

if ($j<0) {
    echo "error";
}elseif ($j>=100) {
    echo "limite 100.";
}else {
    if ( $j%2==0) {
        echo "$j son pares positivos";
    }
}
echo "<br>" ;
echo "<br>";
echo "trabajo 22";
echo "<br>" ;
for ($i=10; $i >=0 ; $i--) { 
    if ($i%2==0) {
        echo "$i";
    }
}
echo "<br>" ;
echo "<br>";
echo "trabajo 23";
echo "<br>" ;
for ($i=0; $i <=10 ; $i++) { 
    if ($i%2==0) {
        echo "$i";
    }
}
echo "<br>";
echo "<br>" ;
echo "trabajo 24";
echo "<br>" ;
for ($i=0; $i <=10 ; $i++) { 
    if ($i%2==1) {
        echo "$i";
    }
}
echo "<br>";
echo "<br>" ;
echo "trabajo 25";
echo "<br>" ;
for ($i=10; $i >=0 ; $i--) { 
    if ($i%2==1) {
        echo "$i";
    }
}
echo "<br>";
echo "<br>" ;
echo "trabajo 26";
echo "<br>" ;
$s=0;
$contar=0;
for ($i=0; $i <=10 ; $i++) { 
    if ($i%2==1) {
       $contar=$contar+1; 
    }
    
}
echo "lacantidad de impares son $contar";
echo "<br>";
echo "<br>" ;
echo "trabajo 27";
echo "<br>" ;
$contar=0;
for ($i=0; $i <=10 ; $i++) { 
    if ($i%2==0) {
        $contar = $contar+1;

    }
}
echo "lacantidad de pares son $contar";
echo "<br>";
echo "<br>" ;
echo "trabajo 28";
echo "<br>" ;

for ($i=3; $i < 31; $i++) { 
    if ($i%3==0) {
        
         echo  "$i <br>" ;
    }
}

echo "<br>";
echo "<br>" ;
echo "trabajo 29";
echo "<br>" ;
echo "los multiplos son: <br>";
for ($i=30; $i > 1; $i--) { 
    if ($i%3==0) {
        echo  "$i <br>" ;
    }
}

echo "<br>";
echo "<br>" ;
echo "trabajo 30";
echo "<br>" ;
$acu=0;
for ($i=1; $i <=10; $i++) { 
   $acu=$acu+$i;
   echo $i." + ";

}
echo " = " .$acu;
echo "<br>";
echo "<br>" ;
echo "trabajo 31";
echo "<br>" ;
$a=4;
$b=4;
$j=$a+$b;
for ($i=1; $i <=30; $i++) { 
    if ($i%4==0) {
        echo $i." ";
        $acu=$acu+$i;    

    }
}
echo  "= $acu"  ;
echo "<br>";
echo "<br>" ;
echo "trabajo 32";
echo "<br>" ;
$cont=0;
$s=$cont+$i;
for ($i=1; $i <11 ; $i++) { 
    if ($i%2==0) {
    $cont=$cont+1;
    
    }
    else {
        echo $i."+";
    }
}
echo "son : $cont impares, la suma ; $s ";
echo "<br>";
echo "<br>" ;
echo "trabajo 33";
echo "<br>" ;
for ($i=2; $i <10 ; $i++) { 
    echo "$i";
}
//heröce
echo "<br>";
echo "<br>" ;
echo "trabajo 34";
echo "<br>" ;
$vueltas=rand(1,10);
$edad=rand(7,60);
if ($vueltas>=5) {
    if ($edad>40) {
        echo "categoria adultoM";
    }
    elseif ($edad>22) {
        echo "categoria adulto";
    }
    elseif ($edad>16) {
        echo "categoria medio a";
    }
    elseif ($edad>10) {
        echo "categoria medio";
    }
    else {
        echo "categoria junior";
    }
}
else {
    echo "no diò 5 vueltas,no participa";
}
echo "<br>";
echo "<br>" ;
echo "trabajo 35";
echo "<br>" ;
$horas=rand(25,45);
$sueldo=rand (750, 1900);
$imp3=$sueldo-300;
$imp2=$sueldo-200;
$imp1=$sueldo-100;
$mitad=$sueldo/2;
$sum1=$sueldo+$mitad;
$res1=$sum1-300;
$res2=$sum1-200;
$res3=$sum1-100;
if ($horas<35) {
    if ($sueldo>1500) {
        echo "cobra un total de $imp3 , descuenta 300";
    }
    elseif ($sueldo>1300) {
        echo "cobra un total de $imp2 ,descuenta 200 "; 
    }
    elseif ($sueldo>1000) {
        echo "cobra un total de $imp1 ,descuenta 100"; 
    }
    else {
        echo "cobra un total de $sueldo ,descuenta 0";
    }
}
elseif ($sum1>1500) {
    echo "cobra un total de $res1 ,descuenta 300";
}
elseif ($sum1>1300) {
    echo "cobra un total de $res2 ,descuenta 200"; 
}
elseif ($sum1>1000) {
    echo "cobra un total de $res3 ,descuenta 100"; 
}
else {
    echo "cobra un total de $sum1 , descuenta 0";
}
echo "<br>";
echo "<br>" ;
echo "trabajo 36";
echo "<br>" ;
$m=3;
if ($m>15) {
    echo "la llamada cuesta 0,10$";
}elseif ($m>=10) {
    echo "la llamada cuesta 0.15$";
}elseif ($m>3) {
echo "la llamada vale 0,35$";
}else  {
    echo "la llamada vale 0.45";
}
echo "<br>";
echo "<br>" ;
echo "trabajo 37";
echo "<br>" ;
$mtr=4;
$kil=10;
$metros=$mtr*60;
$m=$metros*2;
$gv=$kil*15+$m;
if ($m<150) {
    echo "no se cobra flete";
} else {
    echo "el flete cobra : $gv $ ";
}
echo "se va a utilizar $metros ladrillos";
echo "<br>";
echo "<br>" ;
echo "trabajo 38";
echo "<br>" ;
$a=0;
while ($a <= 9) {
for ($i=1; $i <11; $i++) { 
    echo "<br>  $i";
}
$a=$a+1;
}
echo "<br>";
echo "<br>" ;
echo "trabajo 39";
echo "<br>" ;
$s=11;
if ($s%2==0 or $s%3==0 or $s%5==0 or $s%7==0 or $s%9==0) {
echo "no es numero primo : $s";

}else {
    echo "es numero primo : $s";
}
echo "<br>";
echo "<br>" ;
echo "trabajo 40";
echo "<br>" ;
$s=4;
$g=3;
$j=1;
if ($s>$g) {
    echo "$s es mayor";
}elseif ($g>$j) {
    echo "$g es mayor";
}else {
    echo "$j es mayor";
}
echo "<br>";
echo "<br>" ;
echo "trabajo 41";
echo "<br>" ;
$contar=0;
$sum=0;

$mul=1;
for ($i=1; $i <=5 ; $i++) { 
    if ($i%2==0) {
        $contar = $contar+1;
        $sum=$sum+$i;

    }
    ////muktiplicare ayuda profe
    } for ($i=1; $i < 10; $i++) 
        if ($i%2==1) {
            
            $mul=$mul*$i;
        }
        echo $mul;

echo "lacantidad de pares son $contar suma es $sum" ;
echo " multiplicCION  es $mul" ;
echo "<br>";
echo "<br>" ;
echo "trabajo 42";
echo "<br>" ;
$h=2;
$m=10;
$s=40;
echo "$h : $m : $s : " ;    


echo "<br>";
echo "<br>" ;
echo "trabajo 43";
echo "<br>" ;
$a=5;
$s=$a*4;
$j=$a*2;
echo "el perimetro es : $s"; echo "<br>";
echo "la superficie es : $j ";
echo "<br>";
echo "<br>" ;
echo "trabajo 44";
echo "<br>" ;
$y=5;
$x=4;
$g=$x*$x;
$j=$g+$y;
echo "ecuación: x 2 +y"; echo "<br>";
echo "$x + $y = $j" ;
echo "<br>";
echo "<br>" ;
echo "trabajo 45";
echo "<br>" ;
$h=1;
$r=$h*3600;
echo "los segundos de $h horas son : $r";
echo "<br>";
echo "<br>" ;
echo "trabajo 46";
echo "<br>" ;
$edad=15;
$meses=$edad*12;
echo "los meses son ; $meses meses";
echo "<br>";
echo "<br>" ;
echo "trabajo 47";
echo "<br>" ;
$fecha=1976;
$g=2023-$fecha;
echo "tiene $g años nació en $fecha";
echo "<br>";
echo "<br>" ;
echo "trabajo 48";
echo "<br>" ;
$monto=1000;
$tarjeta=1;
$p=10*$monto/100;
$t=$monto-$p;

switch ($tarjeta) {
    case "1":
        echo "paga $monto con tarjeta se realiza el descuento de 10% quedaria : $t a pagar ";
        break;
    
    default:
        echo "no se le hace descuento paga $monto";
        break;
}
echo "<br>";
echo "<br>" ;
echo "trabajo 49";
///49.	Se quiere empapelar una habitación, cada rollo de papel tiene 2 metros cuadrados  y cuesta $130.
/// Mostrar la cantidad de rollos que se va a necesita y el monto a pagar sabiendo los metros cuadrados que hay que
/// empapelar..
echo "<br>" ;
$metros=2;
$rollo=$metros/2;
$precio=$rollo*130;
echo "la cantidad de rollos que se van a utilizar son $rollo y el monto es de $precio ";

echo "<br>";
echo "<br>" ;
echo "<font color=indigo size=4> trabajo 50 </font>" ; 
echo "<br>" ;
$kilome=10;
$k=$kilome*10/100;
$g=$k*5.9;
echo "los kilometros que viaja son $kilome y el precio de combustible  es de $g $";
echo "<br>";
echo "<br>" ;
echo "<font color=indigo size=4> trabajo 51 </font>" ; 
echo "<br>" ;
$d=1000;

$div=$d/4.33;
echo "debe daR $div pedaleadas";
echo "<br>";
echo "<br>" ;
echo "<font color=indigo size=4> trabajo 52 </font>" ; 
echo "<br>" ;

$metros=5;

echo "<center><font color=#FFFF00 size=4> <h1>5/6 Formulario </h1></font><center> <br>";

?>

<form action="ejecutar.php" method="get">
<h3>ingresa tu nombre</h3>
<input type="text" name="s">
<br>
<h3>ingresa tu apellido</h3>
<input type="text" name="a">
<br>
<h3>ingresa tu edad<h3>
    <input type="number" name="b">
<br>
<h3>ingresa tu fecha de nacimiento</h3>
<input type="date" name="c">
<br>
<input type="submit" name="a" value="registrarse">




</body>
</html>