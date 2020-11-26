<?php 
$main_title = "Formulario - Inscripcion";
include_once("./views/header.view.php"); 
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="./controller/adduser.php" method="post">
  <div class="form-group row">
    <label for="identificador" class="col-4 col-form-label">ID</label> 
    <div class="col-8">
      <input required id="identificador" name="user-id" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tipoidentif" class="col-4 col-form-label">Tipo de documento</label> 
    <div class="col-8">
      <input required id="tipoidentif" name="user-id-type" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nombre" class="col-4 col-form-label">Nombre</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input required id="nombre" name="username" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="apel" class="col-4 col-form-label">Apellido</label> 
    <div class="col-8">
      <input required id="apel" name="user-apel" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-4 col-form-label">Contraseña</label> 
    <div class="col-8">
      <input required id="password" name="password" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Correo institucional</label> 
    <div class="col-8">
      <input required id="email" name="email" type="email" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Tipo de usuario</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input required name="tipouser" id="tipouser_0" type="radio" class="custom-control-input" value="egresado"> 
        <label for="tipouser_0" class="custom-control-label">Egresado</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input required name="tipouser" id="tipouser_1" type="radio" class="custom-control-input" value="docente"> 
        <label for="tipouser_1" class="custom-control-label">Docente</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input required name="tipouser" id="tipouser_2" type="radio" class="custom-control-input" value="admin"> 
        <label for="tipouser_2" class="custom-control-label">Administrativo</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-secondary">Guardar</button>
    </div>
  </div>
</form>

<?php include_once("./views/footer.view.php"); ?>