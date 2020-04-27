/**
 * convert a number to quantity format
 * 
 * @param number $number
 * @param string $decimal_separator [',']-['.']
 * @return number
 */
if (!function_exists('to_decimal_format')) {

    function to_decimal_format($number = 0, ) {
        $decimal_separator = $decimal_separator;
        $decimal = 0;
        if (is_numeric($number) && floor($number) != $number) {
            $decimal = 2;
        }
        if ($decimal_separator === ",") {
            return number_format($number, $decimal, ",", ".");
        } else {
            return number_format($number, $decimal, ".", ",");
        }
    }

}
