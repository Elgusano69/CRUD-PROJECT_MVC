<?php 
		require '../modelo/modelo.php';
		$obj = new Categorias();
		if (isset($_POST['btninsertar'])) 
		{
			$nombre = $_POST['txtnombre'];
			$fecha = $_POST['txtfecha'];
			$descripcion = $_POST['txtdescripcion'];
			if ($_POST['btninsertar']=='Insertar') 
			{
				$obj->Insertar($nombre,$fecha,$descripcion);
			}
			elseif ($_POST['btninsertar']=='Modificar') 
			{
				$id = $_POST['txtid'];
				$obj->Ejecutar_Instruccion("update categorias set Nombre='$nombre', Fecha='$fecha', descripcion='$descripcion' where id_categoria = '$id'");
			}
			
		}
		elseif (isset($_GET['ideliminar'])) 
		{		
			$ideliminar = $_GET['ideliminar'];
			$obj->ideliminar($ideliminar);
		}
		elseif (isset($_GET['idmodificar'])) 
		{		
			$idmodificar = $_GET['idmodificar'];
			$buscar_mod = $obj->idmodificar($idmodificar);
		}

		if (isset($_POST['btnbuscar'])) 
		{
			$buscar = $_POST['txtbuscar'];
			$result = $obj->Buscar($buscar);
			$datos = $obj->Tabla_gen($result);
		}
		else
		{
			$result = $obj->Buscar_todo();
			$datos = $obj->Tabla_gen($result);
		}

		require '../vista/vista.php';
 	?>