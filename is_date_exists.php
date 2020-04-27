/**
 * Check if the date string is not empty.
 * 
 * $date 
 * 
 * @return boolean
 */
if (!function_exists('is_date_exists')) {

    function is_date_exists($date = "") {

        if (!$date || $date == "NULL" || $date == "0000-00-00" || is_null($date)) {
            return false;
        } else {
            return true;
        }
    }

}
