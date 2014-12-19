
Variables en SuperPow!!
=======================

Las variables en "SuperPow!!" son usadas a modo de array multidimensional, utilizando los diferentes niveles de índices para indicar puntualmente su funcionamiento y rango de alcance, facilitando así la tarea de desarrollo y mantenimiento. La variable padre por defecto es "$pow", y de ella se desprende el array con el resto de las variables, de la siguiente manera:

1) - Primer nivel: $pow['first']

Este nivel se usa para definir el área de afectación del valor contenido. Los posibles valores son:

	$pow['global'] -> Esta variable afectará de manera global todo el CMS. Seguramente define algún aspecto general del CMS.
	$pow['module'] -> Esta variable afectará localmente al módulo que se está usando actualmente.
	$pow['file'] --->
