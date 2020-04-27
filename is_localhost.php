/**
 * get users ip address
 *
 * @return ip
 */
if (!function_exists('get_real_ip')) {

    function get_real_ip() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

}

/**
 * check if it's localhost
 *
 * @return boolean
 */
if (!function_exists('is_localhost')) {

    function is_localhost() {
        $known_localhost_ip = array(
            '127.0.0.1',
            '::1'
        );
        if (in_array(get_real_ip(), $known_localhost_ip)) {
            return true;
        }
    }

}
