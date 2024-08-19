<?php
    Class KonversiSuhu{
        var $Celcius = 10;
        var $Fahrenheit = 12;
        var $Kelvin= 10;
        var $Reamur= 10;
    
    public function CelciusToFahrenheit($Celcius)
    {
        return ($Celcius * 9/5) + 32;
    }

    public function CelciusToKelvin($Celcius) 
    {
        return $Celcius + 273;
    }
    public function CelciusToReamur($Celcius) 
    {
        return ($Celcius * 4/5);
    }

$KalkulatorSuhu = new KonversiSuhu();
echo "konversi $celcius Celcius Ke kelvin:" . $kalkulatorSuhu->celciusToKelvin($celcius). "K\n";
echo "konversi $celcius Celcius Ke Fahrenhait:" . $kalkulatorSuhu->celciusToFahrenhait($celcius). "F\n";
echo "konversi $celcius Celcius Ke Reamur:" . $kalkulatorSuhu->celciusToReamur($celcius). "R\n"
}
?>