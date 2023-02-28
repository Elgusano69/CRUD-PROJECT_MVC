<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="css/estilos.css"> -->
	<title>Categorias-MVC</title>

<script>
	
	function eliminar(id)
	{
		if(confirm("¿ Estas seguro de eliminar el registro ?"))
		{
			window.location = "../controlador/controlador.php?ideliminar=" + id;
		}
	}

	function modificar(id)
	{
		window.location = "../controlador/controlador.php?idmodificar=" + id;
	}
</script>

</head>
<Style>
	body{
    background-image: linear-gradient(135deg, #441ba2, #5019a2, #228495, #2944f3, #b61543, #f52929, #7c1f1f);
	background-size: 500%;
	animation: fanimado 10s infinite;
	height: 100vh;
  	width: 100%;
	text-align: center;
}

@keyframes fanimado{
	0%{
		background-position: 0% 50%;
	}
	50%{
		background-position: 100% 50%;
	}
	100%{
		background-position: 0% 50%;
	}
}
	</style>
<body style=" background-color: #441ba2; text-align: center; font-family: sans-serif; font-size: 1.25rem; font-weight: 100; line-height: 2.25rem;">	

	
	<center><h1 style=" font-family: sans-serif; font-size: 2.25rem; font-weight: 700; line-height: 3.25rem;">Registrar Categorias</h1>
	<form action="../controlador/controlador.php" id="frminsertar" name="frminsertar" method="post">
			<label for=""></label>
		<input type="text" id="txtid" name="txtid" value="<?php echo @$buscar_mod[0][0]; ?>" style="width: 11%; border: none; outline: none; background: #ffe081; border-bottom: 1px solid" hidden>
		<br>
		<label for="">Nombre</label>
		<input type="text" id="txtnombre" name="txtnombre" value="<?php echo @$buscar_mod[0][1]; ?>" style="width: 21%; border: none; outline: none; background: #441ba2; border-bottom: 1px solid">
		<br>
		<label for="">Fecha</label>
		<input type="date" id="txtfecha" name="txtfecha" value="<?php echo @$buscar_mod[0][2]; ?>" style="width: 22%; border: none; outline: none; background: #441ba2; border-bottom: 1px solid">
		<br>
		<label for="">Descripción</label>
		<input type="text" id="txtdescripcion" name="txtdescripcion" value="<?php echo @$buscar_mod[0][3]; ?>" style="width: 18%; border: none; outline: none; background: #441ba2; border-bottom: 1px solid">
		<br>
		<input type="submit" id="btninsertar" style="background-color: #08ffdd; text-decoration: none;
    		display:inline-block;
    		width:10%;
    		padding:7px;
    		border: 3px solid black;
    		border-radius:50px;
    		text-decoration: none;
    		color:black;
    		font-weight: bold;
    		transition: all 0.9s;
    		text-align: center;
    		font-size: 18px;"  name="btninsertar" value="<?php if(isset($_GET['idmodificar']))
		{ 
			echo 'Modificar';
		}
		else
		{
			echo 'Insertar';
		}
		 ?>">
	</form>
	<br>
	<form action="../controlador/controlador.php" id="frmbuscar" name="frmbuscar" method="post">
		<label for="">Buscar</label>
		<input type="text" id="txtbuscar" style="width: 14%; border: none; outline: none; background: #441ba2; border-bottom: 1px solid" name="txtbuscar" >
		<input type="submit" id="btnbuscar" name="btnbuscar" value="Buscar" style="background-color: #ffeb3b;text-decoration: none;
    		display:inline-block;
    		width:7%;
    		padding:5px;
    		border: 3px solid black;
    		border-radius:50px;
    		text-decoration: none;
    		color:black;
    		font-weight: bold;
    		transition: all 0.9s;
    		text-align: center;
    		font-size: 15px;">
		<br><br>
		<table style="background-color: #70caee; font-family: sans-serif;">
			<tr>
				<td bgcolor="#441ba2" style="border-right: 1px solid;" align="center">ID</td>
				<td bgcolor="#441ba2" style="border-right: 1px solid; width: 180px" align="center">Nombre</td>
				<td bgcolor="#441ba2" style="border-right: 1px solid; width: 180px" align="center">Fecha</td>
				<td bgcolor="#441ba2" style="border-right: 1px solid; width: 180px" align="center">Descipcion</td>
				<td bgcolor="#441ba2" style="border-right: 1px solid;" colspan="2" align="center">Accion</td>
			</tr>
			<?php echo $datos; ?>
		</table>
	</form>
	</center>
</body>
</html>