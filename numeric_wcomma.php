/**
 * validate string is numeric or decimal
 *
 * @param string $str
 * @return throw error if foind any inconsistancy
 */
if (!function_exists('numeric_wcomma')) {
	function numeric_wcomma ($str){
	    return ( ! preg_match("/^(\d+,)*\d+$/", $str)) ? FALSE : TRUE;
	}
}
