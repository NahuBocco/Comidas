<?
	include 'conexxion.php';

	function listar_ingredientes($id)
	{
		$sql = "SELECT * FROM ingredientes B
				INNER JOIN union_receta C ON B.id_ingredientes = C.id_ingredientes
				INNER JOIN recetas A ON A.id_receta = C.id_recetas
				WHERE A.id_receta = '$id'";

		$query = mysql_query($sql);
		$ingredientes = array();

	    while($row =  mysql_fetch_array($query))
	    {
	        array_push($ingredientes, array('id'=>$row['id_ingredientes'],'nombre'=>$row['nombre_ing']));
	    }
	    return $ingredientes;
	}

	function nombre_receta($id)
	{
		$sql = "SELECT nombre from recetas WHERE id_receta = '$id'";

		$query = mysql_query($sql);
		$receta = mysql_fetch_array($query);
		echo $receta[0];
	}

	
?>