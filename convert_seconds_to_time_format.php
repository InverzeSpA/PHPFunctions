/**
 * prepare a human readable time format from a decimal value of seconds
 * 
 * @param string $seconds
 * @return time
 */
if (!function_exists('convert_seconds_to_time_format')) {

    function convert_seconds_to_time_format($seconds = 0) {
        $is_negative = false;
        if ($seconds < 0) {
            $seconds = $seconds * -1;
            $is_negative = true;
        }
        $seconds = $seconds * 1;
        $hours = floor($seconds / 3600);
        $mins = floor(($seconds - ($hours * 3600)) / 60);
        $secs = floor($seconds % 60);

        $hours = ($hours < 10) ? "0" . $hours : $hours;
        $mins = ($mins < 10) ? "0" . $mins : $mins;
        $secs = ($secs < 10) ? "0" . $secs : $secs;

        $string = $hours . ":" . $mins . ":" . $secs;
        if ($is_negative) {
            $string = "-" . $string;
        }
        return $string;
    }

}
