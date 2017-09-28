<?php

function trataNome($nome){

	if(!$nome){
		throw new Exception("Nenhum nome foi informado!", 1);
		
	}

	echo ucfirst($nome)."<br>";
}

try{

	trataNome("henrique");
	trataNome("");
}catch(Exception $e){

	echo $e->getMessage();
}finally { //independente se é try ou catch o código passa pelo finally

	echo "Executou o bloco try!";
}

?>