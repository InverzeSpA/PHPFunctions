/**
 * convert a number to currency format
 * 
 * @param number $number
 * @param string $currency ['Symbol $']
 * @param string $no_of_decimals
 * @param string $decimal_separator [',']-['.']
 * @param string $thousand_separator [',']-['.']
 * @param string $currency_position ['left']-['right']
 * @return number with currency symbol
 */
if (!function_exists('to_currency')) {

    function to_currency($number = 0, $currency = "", $no_of_decimals = 2, $decimal_separator = ".", $thousand_separator = ",", $currency_position = "left" ) {
        $decimal_separator = $decimal_separator;
        $thousand_separator = $thousand_separator;

        $negative_sign = "";
        if ($number < 0) {
            $number = $number * -1;
            $negative_sign = "-";
        }
        if (!$currency) {
            $currency = "$";
        }

        $currency_position = $currency_position;
        if (!$currency_position) {
            $currency_position = "left";
        }

        if ($decimal_separator === ",") {
            if ($thousand_separator !== " ") {
                $thousand_separator = ".";
            }

            if ($currency_position === "right") {
                return $negative_sign . number_format($number, $no_of_decimals, ",", $thousand_separator) . $currency;
            } else {
                return $negative_sign . $currency . number_format($number, $no_of_decimals, ",", $thousand_separator);
            }
        } else {
            if ($thousand_separator !== " ") {
                $thousand_separator = ",";
            }

            if ($currency_position === "right") {
                return $negative_sign . number_format($number, $no_of_decimals, ".", $thousand_separator) . $currency;
            } else {
                return $negative_sign . $currency . number_format($number, $no_of_decimals, ".", $thousand_separator);
            }
        }
    }

}
