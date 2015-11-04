#!/usr/bin/php
<?php
        $chaine = $argv[1];
        $arr = preg_split('/[\s]+/', trim($chaine));
        $ret = "";
        foreach($arr as $word)
        {$ret .= "$word ";}
        trim($ret);
        echo $ret."\n";
?>