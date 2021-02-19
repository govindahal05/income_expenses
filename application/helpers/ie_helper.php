<?php

if (!function_exists('ie_get_container'))
{
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
if (!function_exists('ie_convert_array_to_key_value'))
{
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
if (!function_exists('ie_week_first_end_day'))
{
    function ie_week_first_end_day()
    {
        $day = date('w');
        $start = date('Y-m-d', strtotime('-'.$day.' days'));
        $end = date('Y-m-d', strtotime('+'.(6-$day).' days'));
        $data['start'] = $start;
        $data['end'] = $end;
        return $data;
    }
}
if (!function_exists('ie_last_week_date'))
{
    function ie_last_week_date()
    {
        $previous_week = strtotime("-1 week +1 day");

        $start_week = strtotime("last sunday midnight",$previous_week);
        $end_week = strtotime("next sunday",$start_week);

        $start_week = date("Y-m-d",$start_week);
        $end_week = date("Y-m-d",$end_week);

        $data = array();
        $data['start'] = $start_week;
        $data['end'] = $end_week;
        return $data;
    }
}
if (!function_exists('ie_month_date'))
{
    function ie_month_date()
    {

        $query_date = date('Y-m-d');
        $smonth = date('Y-m-01', strtotime($query_date));
        $emonth = date('Y-m-t', strtotime($query_date));
        $data = array();
        $data['start'] = $smonth;
        $data['end'] = $emonth;
        return $data;
    }
}

