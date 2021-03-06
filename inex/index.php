<?php

require_once "../classIndex.php";

class Index extends ClassIndex {
	protected $root = 'inex';
	protected $list = array(
		array( // dia1
			'title'=> "PDO y arrays",
			'links'=> array(
				'temario.md'=> "Temario",
				'pdo.md'=> "Repaso de PDO",
				'arrays.php'=> "Arrays indexados y asociativos",
				'tablas.php'=> "Tablas: array indexado de arrays asociativos",
				'ejercicio1.php'=> "Ejercicio de tablas",
			)
		),
		array( // dia2
			'title'=> "Tipos de fetch en el PDO",
			'links'=> array(
				'app.md'=> "Aplicaciones web",
				'ejercicio2.md'=> "Ejercicio de informes de Neptuno",
				'fetchall.php'=> "Modos de funcionamiento de fetchAll",
				'fetchall.html'=> "Ídem",
			)
		),
		array( // dia3
			'title'=> "Informes de Neptuno con PDO y HTML",
			'links'=> array(
				'ejercicio2/ejercicio2.md'=> "Informes de Neptuno",
				'ejercicio2/'=> "Solución del ejercicio 2",
			)
		),
		array( // dia4
			'title'=> "Paginación",
			'links'=> array(
				'paginacion/paginacion.md'=> "Apuntes sobre paginación",
				'paginacion/clientes.md'=> "Ejercicio de paginación de clientes",
				'paginacion/clientes.php'=> "Solución del ejercicio",
			)
		),
		array( // dia5
			'title'=> "Paginación con filtros",
			'links'=> array(
				'paginacion2/paginacion2.md'=> "Apuntes de paginación 2",
				'paginacion2/prueba.php'=> "Prueba de SQL_CALC_FOUND_ROWS",
				'paginacion2/productos.md'=> "Ejercicio de paginación de productos con filtro",
				'paginacion2/productos.php'=> "Solución",
				'plugins-atom.md'=> "Plugins para Atom.io: Emmet, Linter",
				'emmet.html'=> "Prueba de Emmet en HTML",
				'emmet.css'=> "Prueba de Emmet en CSS",
			)
		),
		array( // dia6
			'title'=> "Subir ficheros y login",
			'links'=> array(
				'atom-linter.md'=> "Instalación del plugin Linter para Atom.io",
				'upload/subir-ficheros.md'=> "Cómo subir ficheros",
				'upload/subir-test.php'=> "Prueba de subir",
				'upload/subir-foto.php'=> "Cambiar una foto de la página",
				'upload/subir-galeria.php'=> "Añadir fotos a una galería",
				'login/usuario.sql'=> "Tabla usuarios en la BD",
				'login/login.php'=> "Conexión de usuario al backend",
			)
		),
		array( // dia7
			'title'=> "Plantilla frontend",
			'links'=> array(
				'design/design.md'=> "Ideas para construir el frontend y el backend",
				'design/plantilla.md'=> "Diseño de la plantilla frontend",
				'design/frontend.html'=> "Plantilla frontend",
				'design/frontend.css'=> "Hoja de estilos",
				'design/font-awesome.md'=> "Iconos para las redes sociales",
				'bd_extranet.sql'=> "Base de datos para el frontend y el backend",
				'frontend/'=> "Versión 1 del frontend",
			)
		),
		array( // dia8
			'title'=> "Página categorías del frontend ",
			'links'=> array(
				'extranet2.md'=> "Continuación del frontend del día anterior",
				'categoria.md'=> "Ejercicio de la página categoría",
				'database/actualizacion1.sql'=> "Cambiar el nombre de algunas categorías",
				'frontend/'=> "Versión 2 del frontend",
			)
		),
		array( // dia9
			'title'=> "Filtros y paginación de productos",
			'links'=> array(
				'extranet3.md'=> "Continuación del frontend",
				'frontend/'=> "Versión 3 del frontend",
			)
		),
		array( // dia10
			'title'=> "Ficha de productos y botón menú responsive",
			'links'=> array(
				'extranet4.md'=> "Continuación del frontend",
				'frontend/'=> "Versión 4 del frontend",
			)
		),
		array( // dia11
			'title'=> "Página de ficha y buscador. Refactorización. Login backend",
			'links'=> array(
				'extranet5.md'=> "Continuación del frontend",
				'backend5.md'=> "Empezando el backend",
				'frontend/'=> "Versión 5 del frontend",
				'frontend/backend/'=> "Login al backend (pepe o bea y 123)",
			)
		),
		array( // dia12
			'title'=> "Gestor de productos en el backend",
			'links'=> array(
				'extranet6.md'=> "Correciones en el frontend ",
				'backend6.md'=> "Empezando el backend",
				'frontend/'=> "Frontend",
				'frontend/backend/'=> "Backend (pepe o bea y 123)",
			)
		),
		array( // dia13
			'title'=> "Gestor de productos 2 en el backend",
			'links'=> array(
				'backend7.md'=> "Apuntes",
				'frontend/'=> "Frontend",
				'frontend/backend/'=> "Backend (pepe o bea y 123)",
			)
		),
		array( // dia14
			'title'=> "Gestor de categorías. Uso de Ajax",
			'links'=> array(
				'backend8.md'=> "Apuntes y ejercicio",
				'frontend/'=> "Frontend",
				'frontend/backend/'=> "Backend (pepe o bea y 123)",
			)
		),
		array( // dia15
			'title'=> "Examen",
			'links'=> array(
				'examen.md'=> "Realización del examen teórico y práctico",
			)
		),
		array( // dia16
			'title'=> "MVC con CodeIgniter",
			'links'=> array(
				'mvc.md'=> "Apuntes de Modelo/Vista/Controlador",
				'mvc/'=> "Web con CodeIgniter",
			)
		),
		array( // dia17
			'title'=> "MVC de noticias con CodeIgniter",
			'links'=> array(
				'mvc2.md'=> "Pasos a seguir para crear la web",
				'bd_futbol.sql'=> "Base de datos",
				'futbol/'=> "El sitio web",
			)
		),
		array( // dia18
			'title'=> "Continuación del MVC con CodeIgniter",
			'links'=> array(
				'mvc3.md'=> "Continuación del MVC",
				'bd_futbol.sql'=> "Base de datos",
				'futbol/'=> "El sitio web",
			)
		),
	);
}

$index = new Index();

 ?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Implantación de aplicaciones web en entornos internet, intranet y extranet </title>
		<link href="../styles.css" rel="stylesheet">
		<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="../js/index.js"></script>
	</head>
	<body>
		<header>
			<h1>MF0493_3 — Implantación de aplicaciones web en entornos internet, intranet y extranet — 90 horas</h1>
		</header>
		<section>
			<article>
				<ul class="index">
				  <?php $index->printList(); ?>
			 	</ul>
			</article>
		</section>
	</body>
</html>
