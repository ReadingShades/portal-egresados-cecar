<?php
$main_title = "Formulario - Publicacion";
include_once("../views/header-deep.view.php");
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<?php include_once("../views/navbar.view.php"); ?>
		</div>
		<div class="col-md-12">
			<!-- TODO: Banner-->
		</div>
		<div class="col-md-12">
			<?php include_once("../views/local-navbar-deep.view.php"); ?>
		</div>
		<div class="col-md-12">
			<br>
			<h1 class="text-center">Registro de publicaciones</h1>
			<br>
		</div>
		<div class="col-md-12">
			<form action="../model/insertPostDB.php" method="POST">
				<div class="form-group row">
					<label for="usuarioID" class="col-4 col-form-label">Documento de identificación</label>
					<div class="col-8">
						<input id="usuarioID" name="user-id" type="text" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group row">
					<label for="publicacionTitulo" class="col-4 col-form-label">Titulo de publicacion</label>
					<div class="col-8">
						<input id="publicacionTitulo" name="publicacionTitulo" type="text" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group row">
					<label for="publicacionTipo" class="col-4 col-form-label">Tipo de publicacion</label>
					<div class="col-8">
						<select id="publicacionTipo" name="publicacionTipo" required="required" class="custom-select">
							<option value="trabajo">Oferta de trabajo</option>
							<option value="investigacion">Oportunidad de Investigacion</option>
							<option value="noticia">Articulo/Noticia</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-4">Fecha de Inicio</label>
					<div class="col-8">
						<input type="date" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" max="" id="pubFechaInit" name="pubFechaInit" class="form-control"></input>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-4">Fecha de expiracion</label>
					<div class="col-8">
						<input type="date" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" max="" id="pubFechaExp" name="pubFechaExp" class="form-control"></input>
					</div>
				</div>
				<div class="form-group  row">
					<label class="col-4">Contenido</label>
					<div class="summernote col-8">
						<textarea id="my-summernote" name="publicacionCuerpo" cols="40" rows="15" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group row">
					<div class="offset-4 col-8">
						<button type="submit" class="btn btn-secondary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once("../views/footer-deep.view.php"); ?>