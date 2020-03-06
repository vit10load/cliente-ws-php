<?php 

try {

	$client = new SoapClient("http://localhost:8080/calcws?wsdl");

	
	if (isset($_POST['opcao']) and @$_POST['opcao'] == '+') {

		$params = array("getSoma" =>  
			array("n1" => $_POST['n1'],
				"n2" => $_POST['n2']
			)
		);

		$result = $client->__soapCall("getSoma",$params);

		header("Location: http://localhost/cliente-ws?result=".$result->return);

	}elseif (isset($_POST['opcao']) and @$_POST['opcao'] == '-') {

		$params = array("getSub" =>  
			array("n1" => $_POST['n1'],
				"n2" => $_POST['n2']
			)
		);

		$result = $client->__soapCall("getSub",$params);

		header("Location: http://localhost/cliente-ws?result=".$result->return);

	}elseif (isset($_POST['opcao']) and @$_POST['opcao'] == '*') {
		

		$params = array("getMul" =>  
			array("n1" => $_POST['n1'],
				"n2" => $_POST['n2']
			)
		);


		$result = $client->__soapCall("getMul",$params);

		header("Location: http://localhost/cliente-ws?result=".$result->return);

	}elseif (isset($_POST['opcao']) and @$_POST['opcao'] == '/') {

		
		if (@$_POST['n2'] != 0) {

			$params = array("getDiv" =>  
				array("n1" => $_POST['n1'],
					"n2" => $_POST['n2']
				)
			);
		}else {

			header("Location: http://localhost/cliente-ws?result=erro");
		}

		$result = $client->__soapCall("getDiv",$params);

		header("Location: http://localhost/cliente-ws?result=".$result->return);
	}


}catch(Exception $e){

	echo $e->getMessage();
}


?>