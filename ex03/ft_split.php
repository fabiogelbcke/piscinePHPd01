<?php
        function ft_split($chaine)
        {
                $arr = explode(" ", $chaine);
                sort($arr);
                return $arr;
        }
?>