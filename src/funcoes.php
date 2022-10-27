<?php

namespace SRC;
//namespace SRC\boolean;

class Funcoes

{
    /*
    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.
	Exemplos para teste:
	Ano 1905 = século 20
	Ano 1700 = século 17
     * */
    public function SeculoAno(int $ano): int {
        
		$ano = $ano/100; //DIVIDE POR 100
		$ano = $ano+1; // SOMA MAIS UMA DÉCADA
		
		return $ano;
    }
    	
	/*
    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido
    Exemplo para teste:
    Numero = 10 resposta = 7
    Número = 29 resposta = 23
     * */
    public function PrimoAnterior(int $numero): int {
      
		$numeros_primos = array();			
		$controlador = false;

		for ($i=$numero; count($numeros_primos) < $numero ; $i--) {
		  for ($kk=2; $kk < $i; $kk++) {
			if($i % $kk == 0){
			  $controlador = false;
			  break;
			}else{
			  $controlador = true;
			}
		  }
		  if($controlador)
			array_push($numeros_primos, $i);
		}

			
		foreach ($numeros_primos as $primo) {
		  
			 /* Se for primo pego o anterior a ele, se não for pego o último número do meu array que é primo */
			  
			 $divide = 0;
			  
			 for($count=2; $count<$primo; $count++)
			   if($numero % $count == 0){				
				$divide++; //não é primo
			 }
			  
			 if($divide){}  //tem divisores, então é primo, caio fora
			 else {
				//$divide = $divide--;
				//echo "É primo!";
				$ultimo = 0;
			  
			    for($count=2; $count<$primo; $count++){
					if($numero % $count == 0){					
						$ultimo++; //não é primo
					}
					  
					if($ultimo){}  //tem divisores, então é não éprimo, caio fora
					else {							 
						//echo "É primo!";
						//unset($numeros_primos[$count]);
						return $numeros_primos[$ultimo+1]; //opa, aqui é número primo, então pulo uma posição :)
						break; //saio do laço
					}
				}
			    //echo "É primo!".$primos[$divide];
				return $numeros_primos[$divide];
				break; //saio do laço
			 } //fecha else
		} //fecha primeiro for
    }

    /*
    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.
    Exemplo para teste:
	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);
	resposta = 25
     * */
    public function SegundoMaior(array $arr): int {
			
		$maior_do_vetor = $arr[0][0];
		$segundo_maior_do_vetor = $maior_do_vetor;
	
		for($linha = 0; $linha < count($arr); $linha++) {
			for($coluna = 0; $coluna < count($arr); $coluna++) {
				if ($arr[$linha][$coluna]>$maior_do_vetor){
					$segundo_maior_do_vetor = $maior_do_vetor;
					$maior_do_vetor = $arr[$linha][$coluna];
				}			
				//echo $arr[$linha][$coluna];
			}
		}	
		return $segundo_maior_do_vetor;
	}
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.
	Exemplos para teste 
	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes
    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true
     * */
    
	public function SequenciaCrescente(array $arr): bool {
       
		$primeira = $arr[0][0];
		$segunda = $primeira;	
		$valida = 0;
	
		for($linha = 0; $linha < 2; $linha++) {
			for($coluna = 0; $coluna < 2; $coluna++) {
				if ($arr[$linha][$coluna]<$arr[$linha][$coluna+1]){										
					//echo "Ok";
					//return true;					
				}
				else{
					//echo "FALSE";
					$valida = 1;
					//return false;			
				}				
			}
		}	 
		if ($valida == 0){
			return true;
		}
		else{
			return false;
		}
    }//fecha função
} //fecha classe

	echo "<form action='' method='get'>

		Digite o ano: <input type='text' name='resultado'><br>
		Digite as 9 posições do Array:<br>
		Posição 1:<input type='text' name='posicao1' required><br>
		Posição 2:<input type='text' name='posicao2' required><br>
		Posição 3:<input type='text' name='posicao3' required><br>
		Posição 4:<input type='text' name='posicao4' required><br>
		Posição 5:<input type='text' name='posicao5' required><br>
		Posição 6:<input type='text' name='posicao6' required><br>
		Posição 7:<input type='text' name='posicao7' required><br>
		Posição 8:<input type='text' name='posicao8' required><br>
		Posição 9:<input type='text' name='posicao9' required><br>
		
		<input type='submit' value='Executar Funções'>";
			
	if(isset($_GET["resultado"])){} else {$_GET["resultado"]='100';} //verifica se existe a variável, se não seta como 100 para não travar a página :)
		
	if(isset($_GET["posicao1"])){} else {$_GET["posicao1"]=100;} //verifica se existe a variável
	if(isset($_GET["posicao2"])){} else {$_GET["posicao2"]=200;} //verifica se existe a variável
	if(isset($_GET["posicao3"])){} else {$_GET["posicao3"]=300;} //verifica se existe a variável
	if(isset($_GET["posicao4"])){} else {$_GET["posicao4"]=400;} //verifica se existe a variável
	if(isset($_GET["posicao5"])){} else {$_GET["posicao5"]=500;} //verifica se existe a variável
	if(isset($_GET["posicao6"])){} else {$_GET["posicao6"]=600;} //verifica se existe a variável
	if(isset($_GET["posicao7"])){} else {$_GET["posicao7"]=700;} //verifica se existe a variável
	if(isset($_GET["posicao8"])){} else {$_GET["posicao8"]=800;} //verifica se existe a variável
	if(isset($_GET["posicao9"])){} else {$_GET["posicao9"]=900;} //verifica se existe a variável
	
	$arrayAtividade3 = array(
							array($_GET["posicao1"], $_GET["posicao2"],  $_GET["posicao3"]),
							array($_GET["posicao4"], $_GET["posicao5"],  $_GET["posicao6"]),
							array($_GET["posicao7"], $_GET["posicao8"],  $_GET["posicao9"])
						);
		
	$recebe_ano = $_GET["resultado"];
	
	echo "</form>";
	
	$func = new Funcoes (); //CRIO UM OBJETO DA CLASSE
	
	$resultado1 = $func->SeculoAno($recebe_ano); //CRIO UMA VARIÁVEL COM O RESULTADO DA FUNÇÃO
	$resultado2 = $func->PrimoAnterior($recebe_ano);
	$resultado3 = $func->SegundoMaior($arrayAtividade3);
	$resultado4 = $func->SequenciaCrescente($arrayAtividade3);
		
	echo "Resultado - Atividade 1 ::::: Século: ".$resultado1; //EXIBE A VARIÁVEL DE RETORNO DA FUNÇÃO, ISTO É, O RESULTADO
	echo "<br>Resultado - Atividade 2 ::::: Primo Anterior: ".$resultado2;
	echo "<br>Resultado - Atividade 3 ::::: : Segundo maior valor do Array: ".$resultado3;	
	echo "<br>Resultado - Atividade 4 ::::: : Sequência Crescente:<br>".$resultado4;
		
?>

