<?php


function vigenere($alphabet,$schlüsselwort,$satz){
#Alle Strings groß schreiben
$schlüsselwort=strtoupper($schlüsselwort);
$satz=strtoupper($satz);
$alphabet=strtoupper($alphabet);

#Zeilenabstände aus dem Satz entfernen
$satz=str_replace(" ","",$satz);
$output="";
for ($i=0;$i<strlen($satz);$i++) #alle Satzzeichen durchgehen
{
     $schlüsselPos=$i % strlen($schlüsselwort); #alle Schlüsselzeichen durchgehen & beim letzten Zeichen von vorne beginnen
     $schlüsselzeichen=substr($schlüsselwort,$schlüsselPos,1);
     $satzzeichen=substr($satz,$i,1);

     $verschiebung=strpos($alphabet, $schlüsselzeichen); //ermittelt den Abstand um den das Satzzeichen verschoben werden muss

     $aktuellePos=strpos($alphabet, $satzzeichen);

     $neuePos=($aktuellePos+$verschiebung) % strlen($alphabet); //neue Position ermitteln
    $output.=  substr($alphabet,$neuePos,1); //neues zeichen ausgeben

}
return $output;

}


$alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$schlüsselwort="buchsbaeumebrauchenauchwasser";
$satz="Erst wenn der zu verschluesselnde text kuerzer oder genauso lang ist wiedas verwendete schluesselwort ist das verfahren unknackbar";
echo vigenere($alphabet,$schlüsselwort,$satz);
