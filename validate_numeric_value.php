/**
 * validate string is numeric value
 * 
 * @param string $value
 * @return throw error if foind any inconsistancy
 */
if (!function_exists('validate_numeric_value')) {

    function validate_numeric_value($value=0) {
        if($value && !is_numeric($value)){
            die("Invalid value");
        }
    }

}
