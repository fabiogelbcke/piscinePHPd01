#!/usr/bin/php
<?php
        $chaine = "";
        foreach ($argv as $elem)
        {
                if ($elem != $argv[0])
                $chaine .= " $elem ";
        }
        $arr = preg_split('/[\s]+/', trim($chaine));
        sort($arr);
        foreach($arr as $word)
        {echo $word."\n";}
?>