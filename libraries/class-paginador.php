<?

Class Procesos {
	
	private $registros_encontrados;
	private $pagina_actual
	private $registros_por_pagina;
	private $url_base;



	public function __construct($reg_encontrados, $pag_actual, $reg_por_pagina, $url){
		$this->reg_encontrados = $reg_encontrados;
		$this->pagina_actual = $pag_actual;
		$this->registros_por_pagina = $reg_por_pagina;
		$this->url_base = $url;
	}



	private function numPages ( $registros_encontrados, $registros_por_pagina = '' ) {
 
		// Establezco cantidad de páginas y redondeo
		$number = ceil ( $registros_encontrados / $registros_por_pagina );

		// Devuelvo la respuesta
		return $number;

	}



	private function nextPage ( $pagina_actual, $paginas_existentes ) {

		// Defino la próxima página
		$next = $pagina_actual + 1;

		// Compruebo que la próxima página no sea mayor que la última
		// Si no es mayor retorno el número
		if($next <= $paginas_existentes):
			return $next;

		// Si es mayor retorno FALSE
		else :
			return false;

	}



	private function prevPage ( $pagina_actual ) {

		// Defino la página anterior
		$prev = $pagina_actual - 1;

		// Compruebo que la página anterior no sea menor que 1
		// Si no es mayor retorno el número
		if($prev >= 1):
			return $prev;

		// Si es menor que 1 retorno FALSE
		else :
			return false;

	}



	private paginador_vista_listado ($paginas) {
		
		for ($i = 1; $i < $paginas; $i++) {
			
			echo ('<li>');
			echo ('<a href="');
			echo $this->url_base . $pag . "/";
			echo ('">');
			echo ('</li>');

		}

	}



	private paginador_vista($paginas) {

		echo ('<ul>');

		

		echo ('<ul>');

	}



	public function paginador(){

		

	}



}

?>