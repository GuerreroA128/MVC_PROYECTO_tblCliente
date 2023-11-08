<div id="addUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar nuevo usuario</h4>
      </div>
      <div class="modal-body">
		<form name="formCliente" onsubmit="register(); return false">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre" required autocomplete="off">
		  </div>
		  <br>

		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="direccion" type="text" class="form-control" name="direccion" placeholder="Direccion" required autocomplete="off">
		  </div>
		  <br>

		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="cp" type="text" class="form-control" name="cp" placeholder="Codigo Postal" required autocomplete="off">
		  </div>
		  <br>

		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="ciudad" type="text" class="form-control" name="ciudad" placeholder="Ciudad" required autocomplete="off">
		  </div>
		  <br>

		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		    <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electronico" required autocomplete="off">
		  </div>
		  <br>

		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="telefono" type="text" class="form-control" name="telefono" placeholder="Telefono" required autocomplete="off">
		  </div>
	      <br>

		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="apellidos" type="text" class="form-control" name="apellidos" placeholder="Apellidos" required autocomplete="off">
		  </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Registrar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>


<div id="updateCliente" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar informacion del cliente </h4>        
      </div>
      <div class="modal-body">
		<form name="formClienteUpdate" onsubmit="update(); return false">
		<input type="text" name="idcliente" id="idcliente" style="display: none;">

		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="direccion" type="text" class="form-control" name="direccion" placeholder="Direccion" required autocomplete="off">
		  </div>
		  <br>

		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="cp" type="text" class="form-control" name="cp" placeholder="Codigo Postal" required autocomplete="off">
		  </div>
		  <br>

		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="ciudad" type="text" class="form-control" name="ciudad" placeholder="Ciudad" required autocomplete="off">
		  </div>
		  <br>

		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		    <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electronico" required autocomplete="off">
		  </div>
		  <br>

		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="telefono" type="text" class="form-control" name="telefono" placeholder="Telefono" required autocomplete="off">
		  </div>
	      <br>

		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="apellidos" type="text" class="form-control" name="apellidos" placeholder="Apellidos" required autocomplete="off">
		  </div>
		  		  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Actualizar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>