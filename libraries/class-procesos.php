<?

Class Procesos {
	
	private $tabla;
	private $campos = array();
	private $valores = array();
	private $id;
	private $condiciones;



	public function __construct($table){
		$this->tabla = $table;
	}



	public function insertReg($campos, $valores){

		// Armo el juego de ingresos
		$cols = implode(",", $campos);
		$vals = "'".implode("','", $valores)."'";

		// Armo la consulta
		$ssql = "Insert into ".$this->tabla." (".$cols.") values (".$vals.")";

		// Devuelvo la respuesta
		if(mysql_query($ssql)):
			return true;
		else :
			return false;
		endif;

	}


	
	public function updateReg($campos, $valores, $id){

		// Armo el juego de actualizaciones
		$n = count($campos);
		for($i=0; $i<$n; $i++):
			$updt .= $campos[$i]."='".$valores[$i]."'";
			if($i!=$n-1):
				$updt .= ", ";
			endif;
		endfor;

		// Armo la consulta de actualización
		$ssql = "Update ".$this->tabla." set ".$updt." where Id='".$id."'";

		// Devuelvo la respuesta
		if(mysql_query($ssql)):
			return true;
		else :
			return false;
		endif;

	}



	public function deleteReg($id){
		
		// Armo la consulta de la eliminación
		$ssql = "Delete from ".$this->tabla." where Id='".$id."'";

		// Devuelvo la respuesta
		if(mysql_query($ssql)):
			return true;
		else :
			return false;
		endif;
		
	}



	public function showRegList(){

		// Armo el juego de condiciones
		$n = count($campos);
		if($n!=0):
			for($i=0; $i<$n; $i++):
				$updt .= $campos[$i]."='".$valores[$i]."'";
				if($i!=$n-1):
					$updt .= " and ";
				endif;
			endfor;
			$where = "where ".$updt;
		endif;

		// Armo la sentencia y la ejecuto
		$ssql = "Select * from ".$this->tabla." ".$where." order by apellido asc";
		$result = mysql_query($ssql) or die(mysql_error());
		
		while($row = mysql_fetch_assoc($result)){
			$fila[] = $row;
		}

		// Devuelvo el array de datos
		return $fila;

	}



	public function showReg($id){

		// Armo la sentencia y la ejecuto
		$ssql = "Select * from ".$this->tabla." where Id='".$id."' limit 1";
		$result = mysql_query($ssql) or die(mysql_error());
		$row = mysql_fetch_assoc($result);

		// Devuelvo el array de datos
		return $row;

	}


}

?>