<?php 

class Calculadora
{

	public function adicicao($valores){
		$soma = 0;
		foreach ($valores as $valor) {
			$soma += $valor;
		}
		return "<b>Soma:</b> ".$soma.'<br />';
	}

	public function subtracao($valores){
		$sub = null;
		foreach ($valores as $valor) {
			if($sub == null){
				$sub = $valor;
			} else {
				$sub -= $valor;
				
			}
		}
		return "<b>Subtração: </b>". $sub.'<br />';
	}

	public function multiplicacao($valores){
		$multp = 1;
		foreach ($valores as $valor) {
			$multp *= $valor;
		}
		return "<b>Multiplicação: </b>".$multp.'<br />';
	}

	public function divisao($valores){
		$tam = count($valores);
		$div = 1;
		for($i=0; $i<$tam; $i++){
			if($div == 1){
				$div = $valores[$i] / $div;
			} else {
				$div /= $valores[$i];
			}
		}
		return "<b>Divisão: </b>".$div.'<br />';
	}

}