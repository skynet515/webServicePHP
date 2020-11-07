<?php

class Algoritmos
{
	//algorimo mesas:
	function mesas($mesas)
	{
		//$mesas = "5-3-4";
		$array = explode("-", $mesas);
		$mesas=array();

		foreach ($array as $n => $mesa) {
			$mesas[$n] = $mesa;

			//echo '$mesa [' . $n . '] = ' . $mesa . "<br>";
		}
		return $mesas;
	}

	//Algoritmo hora
	public function hora($hora)
	{
		//Trabajar en formato 24 horas
		$array = explode("-", $hora);

		$horasT = abs($array[1]-$array[0]);

		$ini = $array[0];
		$fin = $ini + 1;
		for ($x = 0; $x < $horasT; $x++) {

			 $data[$x] = "$ini-$fin";
			$ini++;
			$fin++;
		}
		return $data;
	}
	//Algoritmo url
	public function palabra($var)
	{
		$var1 = explode("G%G", $var);
		$dir = "";
		foreach ($var1 as $n => $dat) {
			$dir = "$dir $dat";
		}
		return trim($dir);
	}
}
