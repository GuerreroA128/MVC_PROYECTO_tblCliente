<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class Administrator extends db{
	
	private function view_users(){
		try {
			$SQL = "SELECT * FROM tbl_cliente";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
			return $result->fetchAll(PDO::FETCH_OBJ);	
		} catch (Exception $e) {
			die('Error Administrator(view_clientes) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function get_view_users(){
		return $this->view_users();
	}

	private function registercliente($data){
		try {
			$SQL = 'INSERT INTO tbl_cliente (nombre,direccion,cp,ciudad,email,telefono,apellidos) VALUES (?,?,?,?,?,?,?)';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
									$data['nombre'],
									$data['direccion'],
									$data['cp'],
									$data['ciudad'],
									$data['email'],
									$data['telefono'],
									$data['apellidos'],
									)
							);			
		} catch (Exception $e) {
			die('Error Administrator(register_cliente) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_register_cliente($data){
		$this->register_cliente($data);
	}

	private function update_cliente($data){
		try {
			$SQL = 'UPDATE tbl_cliente SET nombre = ?, direccion = ?, cp = ? ciudad = ?, email = ?, telefono = ?, apellidos = ? WHERE idcliente = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
								$data['nombre'],
								$data['direccion'],
								$data['cp'],
								$data['ciudad'],
								$data['email'],
								$data['telefono'],
								$data['apellidos'],
									)
							);			
		} catch (Exception $e) {
			die('Error Administrator(update_cliente) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_update_cliente($data){
		$this->update_cliente($data);
	}

	private function delete_cliente($idcliente){
		try {
			$SQL = 'DELETE FROM tbl_cliente WHERE idcliente = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($id));			
		} catch (Exception $e) {
			die('Error Administrator(delete_cliente) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_delete_cliente($id){
		$this->delete_cliente($id);
	}	
}
?>