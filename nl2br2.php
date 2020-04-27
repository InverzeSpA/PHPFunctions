/**
 * use this to replacement string
 *
 * @param string $string
 * @return string $out
 */
if (!function_exists('nl2br2')) {
	function nl2br2($string) {
	  $string = str_replace(array("\r\n", "\r", "\n"), "<br />", $string);
	  return $string;
	}
}
