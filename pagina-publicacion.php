<?php include_once("./views/header.view.php"); ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- TODO: navbar-->
		</div>
		<div class="col-md-12">
			<!-- TODO: localnavbar-->
		</div>
		<div class="col-md-12">
			<!-- TODO: Banner-->
		</div>
		<div class="col-md-12">
			<form action="./model/insertPostDB.php" method="POST">
				<div class="form-group row">
					<label for="usuarioID" class="col-4 col-form-label">Documento de identificación</label>
					<div class="col-8">
						<input id="usuarioID" name="usuarioID" type="text" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group row">
					<label for="usuarioNombre" class="col-4 col-form-label">Autor</label>
					<div class="col-8">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fa fa-address-card"></i>
								</div>
							</div>
							<input id="usuarioNombre" name="usuarioNombre" type="text" class="form-control" required="required">
						</div>
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
					<label class="col-4"></label>
					<div class="col-8">
						<textarea id="publicacionCuerpo" name="publicacionCuerpo" cols="40" rows="15" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group row">
					<div class="offset-4 col-8">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once("./views/footer.view.php"); ?>