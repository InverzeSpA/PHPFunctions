/**
 * get a human readable file size format from bytes 
 * 
 * @param string $bytes
 * @return fise size
 */
if (!function_exists('convert_file_size')) {

    function convert_file_size($bytes) {
        $bytes = floatval($bytes);
        $bytes_array = array(
            0 => array("unit" => "tb", "value" => pow(1024, 4)),
            1 => array("unit" => "gb", "value" => pow(1024, 3)),
            2 => array("unit" => "mb", "value" => pow(1024, 2)),
            3 => array("unit" => "kb", "value" => 1024),
            4 => array("unit" => "b", "value" => 1),
        );

        foreach ($bytes_array as $byte) {
            if ($bytes >= $byte["value"]) {
                $result = $bytes / $byte["value"];
                $result = to_decimal_format(strval(round($result, 2))) . " " . $byte["unit"];
                break;
            }
        }
        return $result;
    }

}

/**
 * convert a number to quantity format
 * 
 * @param number $number
 * @param string $decimal_separator
 * @return number
 */
if (!function_exists('to_decimal_format')) {

    function to_decimal_format($number = 0, $decimal_separator = ",") {
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
