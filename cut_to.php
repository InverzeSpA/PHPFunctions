/**
 * use this to cut string
 *
 * @param string $string
 * @param int $len
 * @return string $out
 */
if (!function_exists('cut_to')) {
	function cut_to($texto, $largo){
		$salida = '';
		if (trim($texto) != ''){
			$texto2 = str_replace("\r"," ",$texto);
			$texto2 = str_replace("\n"," ",$texto2);
			$atexto = explode(". ",$texto2);
			$salida = $atexto[0];
		}
		if (strlen($salida) > $largo || strlen($salida) == 0){
			$atexto = explode(" ",$texto);
			$salida = '';
			$espacio = '';
			for ($x=0;$x<count($atexto);$x++) {
				$salida .= $espacio . $atexto[$x];
				$espacio = ' ';
				if (strlen($salida) > $largo){
					$salida .= '...';
					$x = count($atexto) + 10;
				}
			}
		}
		return $salida;
	}
}
