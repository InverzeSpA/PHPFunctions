/**
 * get date difference in days
 * 
 * $start_date && $end_date should be Y-m-d format
 * 
 * @return difference in days
 */
if (!function_exists('get_date_difference_in_days')) {

    function get_date_difference_in_days($start_date, $end_date, $format = "default") {

        $start = new DateTime($start_date);
        $end = new DateTime($end_date);
		
		if($format=="default"){
        	return $end->diff($start)->format("%a");
        }else{
	        return $end->diff($start)->format("%R%a");
        }
    }

}
