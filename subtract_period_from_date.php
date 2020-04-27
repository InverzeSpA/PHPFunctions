/**
 * subtract days from a given date
 * 
 * $date should be Y-m-d
 * $period_type should be days/months/years/weeks
 * 
 * @return date
 */
if (!function_exists('subtract_period_from_date')) {

    function subtract_period_from_date($date, $no_of = 0, $period_type = "days") {
        return date('Y-m-d', strtotime("-$no_of $period_type", strtotime($date)));
    }

}
