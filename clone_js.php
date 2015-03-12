<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<form action="#" method="post">		
		<table border="1" cellpadding="0" cellspacing="0" width="30%" class="tbl-dinamic">
			<thead>
				<tr>
					<th>---</th>
					<th>---</th>
					<th>---</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="number" name="input1[]"></td>
					<td><input type="text" name="input2[]"></td>
					<td><button type="button" class="row-remove">X</button></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><button type="button" class="row-add">+</button></td>
				</tr>
			</tfoot>
		</table>

		<button type="button">Enviar</button>
		<!-- <button type="button">Clonar</button> -->
	</form>

</body>
</html>

<script type="text/javascript" src="assets/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>