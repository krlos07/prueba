<?php
	function calcular(){
		$calorias = 25;//$_POST['calorias'];
		$peso = 10;//$_POST['peso'];
		$pesoFinal = 0;
		$caloriaFinal = 0;
		$solucion="";
		$elementos = [
			[6,8],
			[1,7],
			[1,4],
			[3,3],
			[5,2]
		];
		
		$i=0;
		while ($peso>0){
			if ($peso>=$elementos[$i][0]) {
				$peso=$peso-$elementos[$i][0];
				$caloriaFinal=$caloriaFinal+$elementos[$i][1];
				$pesoFinal=$pesoFinal+$elementos[$i][0];
				$solucion=$solucion."Peso: ".$elementos[$i][0]." Calorias: ".$elementos[$i][1]."<br>";
			}else{
				$peso=0;
			}
			$i++;
			//break;
		}
		echo $solucion;
		echo "Peso total: ".$pesoFinal."<br>Caloria total: ".$caloriaFinal;

	}
	calcular();
?>