<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class administratorController extends Administrator{

	function index(){
		require_once('views/all/header.php');
		require_once('views/all/nav.php');
		require_once('views/index/index.php');
		require_once('views/index/modals.php');
		require_once('views/all/footer.php');
	}

	function table_users(){
		?>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Direccion</th>
				<th>C.P</th>
				<th>Ciudad</th>
				<th>E-Mail</th>
				<th>Telefono</th>
				<th>Apellidos</th>
				<th>Opcion</th>
				</tr>
			</thead>
			<tbody >		
		<?php
		foreach (parent::get_view_users()	as $data) {
		?>
		<tr>
			<td><?php echo $data->idcliente; ?> </td>
			<td><?php echo $data->nombre; ?> </td>
			<td><?php echo $data->direccion; ?> </td>
			<td><?php echo $data->cp; ?> </td>
			<td><?php echo $data->ciudad; ?> </td>
			<td><?php echo $data->email; ?> </td>
			<td><?php echo $data->telefono; ?> </td>
			<td><?php echo $data->apellidos; ?> </td>
			<td>
			  <div class="btn-group">
			    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			    Seleccionar <span class="caret"></span></button>
			    <ul class="dropdown-menu" role="menu">
			      <li><a href="#" onclick="ModalUpdate('<?php echo $data->idcliente; ?>
				  ','<?php echo $data->nombre; ?>
				  ','<?php echo $data->direccion; ?>
				  ','<?php echo $data->cp; ?>
				  ','<?php echo $data->ciudad; ?>
				  ','<?php echo $data->email; ?>
				  ','<?php echo $data->telefono; ?>
				  ','<?php echo $data->apeliidos; ?>
				   ');">Actualizar</a></li>
			      <li><a href="#" onclick="deleteCliente('<?php echo $data->idcliente; ?>');">Borrar</a></li>
			    </ul>
			  </div>
			</td>
		</tr>
		<?php
		}
		?>
			</tbody>
		</table>	
	<?php	
    }
    
	function deleteCliente(){		
			parent::set_delete_user($_REQUEST['idcliente']);		
    }

	function registercliente(){
		$data = array(
					'nombre' 	=> $_REQUEST['nombre'],
					'direccion' => $_REQUEST['direccion'],
					'cp'		=> $_REQUEST['cp'],
					'ciudad' 	=> $_REQUEST['cidad'],
					'email'		=> $_REQUEST['email'],
					'telefono'	=> $_REQUEST['telefono'],
					'apellidos' => $_REQUEST['apellidos']

					);		
					parent::set_register_user($data);		
    }    
    
	function updatecliente(){
		$data = array(
			'nombre' 	=> $_REQUEST['nombre'],
			'direccion' => $_REQUEST['direccion'],
			'cp'		=> $_REQUEST['cp'],
			'ciudad' 	=> $_REQUEST['cidad'],
			'email'		=> $_REQUEST['email'],
			'telefono'	=> $_REQUEST['telefono'],
			'apellidos' => $_REQUEST['apellidos']
				
		);		
			parent::set_update_user($data);		
	}    
    
}

