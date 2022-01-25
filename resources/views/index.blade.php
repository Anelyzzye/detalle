<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ejemplo</title>
</head>
<body>
	<form action="{{ route('detalle.enviar')}}" method="post">
		@csrf
		<input type="email" name="email" placeholder="Escriba su email">
		<br>
		<input type="text" name="asunto" placeholder="Asunto:">
		<input type="submit" value="Enviar">
	</form>
</body>
</html>