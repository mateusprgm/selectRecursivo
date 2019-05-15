<?php require_once("component/select_recursive.php"); ?>
<?php 


	$teste = new selectRecursive();
  
  $lista_perguntas = ['1º pergunta', '2º pergunta', '3º pergunta', 
    				  '4º pergunta', '5º pergunta', '6º pergunta', 
    				  '7º pergunta', '8º pergunta', '9º pergunta', 
    				  '10º pergunta'];
  
  $lista_respostas = ['1', '2', '3', '4', '5',];

  $teste->ignition($lista_perguntas, $lista_respostas);
?>