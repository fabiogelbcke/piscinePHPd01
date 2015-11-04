<?php
        function ft_is_sort($arr)
        {
        $tmp = $arr;
        sort($arr);
        if ($arr == $tmp)
                return True;
        else
                return False;
        }
?>