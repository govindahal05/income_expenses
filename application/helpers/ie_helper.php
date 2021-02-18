<?php

if (!function_exists('ie_get_container')) {
    function ie_get_container($c_usertype)
    {
        if ($c_usertype == 1) {
            $container = 'admin_container';
        } else if ($c_usertype == 2) {
            $container = 'member_container';
        } else {
            $container = 'default_container';
        }
        return $container;
    }
}
if (!function_exists('ie_convert_array_to_key_value')) {

    function ie_convert_array_to_key_value($array, $opt)
    {
        $new_array = array(''=>'Select');
        if (is_array($array)) {
            foreach ($array as $a) {
                $new_array[$a->id] = $a->$opt;
            }
        }

        return $new_array;
    }
}