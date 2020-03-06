<!DOCTYPE html>
<html>
<head>
	<title>Client - WS</title>
</head>
<style type="text/css">
	
	header h1 {

		text-align: center;
	}

	section form select {
		width: 20%;
	}

	section form button {

		width: 120px;
	}

	.resultado {
		text-align: center;
		font-family: "Times";
		font-size: 35px;
		font-weight: bold;
	}

</style>
<body>

	<header>
		<h1>Teste client ws</h1>
	</header>

	<section>

		<form action="http://localhost/cliente-ws/service/soap.php" method="POST">
			<fieldset>
				<label>n1</label>
				<input type="text" name="n1" />
			</fieldset>
			<br>
			<fieldset>
				<label>n2</label>
				<input type="text" name="n2" />
			</fieldset>
			<br>
			<select name="opcao">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			<button type="submit">=</button>
		</form>
		
	</section>

	<div class="resultado">
		<?php 
			if (isset($_GET['result'])) {
				
				echo $_GET['result'];
			}
		?>
	</div>

</body>
</html>