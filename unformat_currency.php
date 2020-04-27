/**
 * convert a currency value to data format
 *  
 * @param number $currency
 * @param string $decimal_separator
 * @return number
 */
if (!function_exists('unformat_currency')) {

    function unformat_currency($currency = "", $decimal_separator = ",") {
		    //Remove everything except a digit "0-9", a comma ",", and a dot "."
        $new_money = preg_replace('/[^\d,-\.]/', '', $currency);
        $decimal_separator = $decimal_separator;
        if ($decimal_separator === ",") {
            $new_money = str_replace(".", "", $new_money);
            $new_money = str_replace(",", ".", $new_money);
        } else {
            $new_money = str_replace(",", "", $new_money);
        }
        return $new_money;
    }

}
