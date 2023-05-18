<?php
class Complex{
    var $real;
    var $imag;
    function Complex($a, $b){
        $this -> real = $a;
        $this -> imag = $b;
    }

    function modul()
    {
        return sqrt(pow(($this -> real),2) + pow( ($this -> imag), 2));
    }
}

$x1 =3; $y1 = 4; $x2 = 1; $y2 = 2;
$obiect1 = new Complex($x1, $y1);
$obiect2 = new Complex($x2, $y2);
$obiect3 = new Complex(5, 6);
$obiect4 = new Complex(3, 4);
echo "Modulul obiectului 1 este: ".$obiect1 -> modul(), "<br>";
echo "Modulul obiectului 2 este: ".$obiect2 -> modul(), "<br>";
echo "Modulul obiectului 3 este: ".$obiect3 -> modul(), "<br>";
echo "Modulul obiectului 4 este: ".$obiect4 -> modul(), "<br>";
echo "<a href='elemente.php'>Return to main page</a>";
?>



