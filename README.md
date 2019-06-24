# Vigenère-Verschlüsselung
Eine PHP Implementierung der Vigenère-Chiffre - Eine Verschlüsslungsmethode aus dem 16. Jahrhundert.

https://de.wikipedia.org/wiki/Vigen%C3%A8re-Chiffre

## Beispiel zur Verwendung der Verschlüsselungsmethode

$alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZ";

$schlüsselwort="buchsbaeumebrauchenauchwasser";

$satz="Erst wenn der zu verschluesselnde text kuerzer oder genauso lang ist wiedas verwendete schluesselwort ist das verfahren unknackbar";

echo vigenere($alphabet,$schlüsselwort,$satz);

