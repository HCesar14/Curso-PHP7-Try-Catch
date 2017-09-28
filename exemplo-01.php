<?php

try{

	throw new Exception("Houve um erro.", 400); //erro e o codigo de erro que vc quiser
	
}catch(Exception $e){

	echo json_encode(array(
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()
	));
}

?>