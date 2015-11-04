#!/usr/bin/php
<?php
        var_dump($argv);
        $chaine = "";
        foreach ($argv as $elem)
        {
                echo $elem."\n\n";
                if ($elem != $argv[0])
                $chaine .= " $elem ";
        }
        $arr = preg_split('/[\s]+/', trim($chaine));
        sort($arr);
        foreach($arr as $word)
        {if (ctype_alpha($word[0]))echo $word."\n";}        
        foreach($arr as $word)
        {if (ctype_digit($word[0]))echo $word."\n";}
        foreach($arr as $word)
        {if (!ctype_alpha($word[0]) && !ctype_digit($word[0]))echo $word."\n";}
?>