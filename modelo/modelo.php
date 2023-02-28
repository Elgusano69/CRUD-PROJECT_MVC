<?php

require '../bd/conexion_bd.php';

class Categorias extends BD_PDO
{
	function Insertar($nombre, $fecha, $descripcion)
	{
		$this->Ejecutar_Instruccion("Insert into categorias(Nombre, Fecha, descripcion) values('$nombre','$fecha','$descripcion')");
	}

	function Buscar($buscar)
	{
		$result = $this->Ejecutar_Instruccion("Select * from categorias where Nombre like '%$buscar%'");
		return $result;
	}

	function Buscar_todo()
	{
		$result = $this->Ejecutar_Instruccion("Select * from categorias");
		return $result;
	}

	function ideliminar($ideliminar){
		$this -> Ejecutar_Instruccion("Delete from categorias where id_categoria = '$ideliminar'");
	}

	function idmodificar($idmodificar){
		$result= $this->Ejecutar_Instruccion("Select * from categorias where id_categoria = '$idmodificar'");
		return $result;
	}

	function Tabla_gen($result)
	{
		$tabla="";
		foreach ($result as $renglon) 
		{
			$tabla.="<tr>";
			$tabla.='<td style="border-right: 1px solid;" align="center">'.$renglon[0].'</td>';
			$tabla.='<td style="border-right: 1px solid;" align="center">'.$renglon[1].'</td>';
			$tabla.='<td style="border-right: 1px solid;" align="center">'.$renglon[2].'</td>';
			$tabla.='<td style="border-right: 1px solid;" align="center">'.$renglon[3].'</td>';
			$tabla.='<td style="width: 100px;" align="center"><input type="button" id="btneliminar" style="background-color: #cc0000;text-decoration: none;
    		display:inline-block;
    		padding:5px;
    		border: 2px solid black;
    		border-radius:50px;
    		text-decoration: none;
    		color:black;
    		font-weight: bold;
    		transition: all 0.9s;
    		text-align: center;
    		font-size: 15px;"name="btneliminar" value="Eliminar" onclick="javascript: eliminar('.$renglon[0].');"></td>';
			$tabla.='<td align="center"><input type="button" id="btnmodificar" name="btnmodificar" style="background-color: #008f39;text-decoration: none;
    		display:inline-block;
    		padding:5px;
    		border: 2px solid black;
    		border-radius:50px;
    		text-decoration: none;
    		color:black;
    		font-weight: bold;
    		transition: all 0.9s;
    		text-align: center;
    		font-size: 15px;" value="Modificar" onclick="javascript: modificar('.$renglon[0].');"></td>
				</tr>';
		}
		return $tabla;
	}
}
?>