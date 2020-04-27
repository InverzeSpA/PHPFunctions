/**
 * use this to replacement string
 *
 * @param string $string
 * @return string $out
 */
if (!function_exists('br2nl2')) {
	function br2nl2($string) {
	  $string = str_replace(array("<br>", "<br />", "<p>", "<div>"), "\n", $string);
	  return $string;
	}
}
