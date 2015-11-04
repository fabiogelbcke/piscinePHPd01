#!/usr/bin/php
<?php
        while (1){
        $handle = fopen ("php://stdin","r");
        echo "Entrez un nombre: ";
        $number = fgets($handle);
        $number = trim($number);
        if (ctype_digit($number))
        {
                if ($number % 2 == 0)
                echo "Le chiffre $number est Pair\n";
                else
                echo "Le chiffre $number est Impair\n";
        }
        else{
                print("'$number' n'est pas un chiffre\n");
        }
        }
?>      