function objectAjax(){
	var xmlhttp = false;
	try{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e){
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");			
		} catch (E){
			xmlhttp = false;	
		}		
	}
	if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
//Inicializo automaticamente la funcion read al entrar a la pagina o recargar la pagina;
addEventListener('load', read, false);

function read(){
        $.ajax({        
        		type: 'POST',
                url:   '?c=administrator&m=table_cliente',               
                beforeSend: function () {
                        $("#information").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#information").html(response);
                }
        });
}

function register(){
	nombre 		= document.formCliente.nombre.value;
	direccion 	= document.formCliente.direccion.value;
	cp	 		= document.formCliente.cp.value;
	ciudad 		= document.formCliente.ciudad.value;
	email	 	= document.formCliente.email.value;
	telefono	= document.formCliente.telefono.value;
	apellidos 	= document.formCliente.apellidos.value;
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=registercliente", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){			
			read();			
			alert('Los datos guardaron correctamente.');			
			$('#addCliente').modal('hide');
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("nombre="+nombre+"&direccion="+direccion+"&cp="+cp+"&ciudad="+ciudad+"&email="+email+"&telefono="+telefono+"&apellidos"+apellidos);
}	

function update(){
	idcliente 	= document.formClienteUpdate.idcliente.value;
	nombre 		= document.formClienteUpdate.nombre.value;
	direccion 	= document.formClienteUpdate.direccion.value;
	cp 			= document.formClienteUpdate.cp.value;
	ciudad 		= document.formClienteUpdate.ciudad.value;
	email 		= document.formClienteUpdate.email.value;
	telefono 	= document.formClienteUpdate.telefono.value;
	apellidos 	= document.formClienteUpdate.apellidos.value;

	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=updatecliente", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){
			read();
			$('#updateUser').modal('hide');
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("nombre="+nombre+"&direccion="+direccion+"&cp="+cp+"&ciudad="+ciudad+"&email="+email+"&telefono="+telefono+"&apellidos"+apellidos+"&idcliente="+idcliente);

}

function deleteCliente(idcliente){	
	if(confirm('¿Esta seguro de eliminar este registro?')){						
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=deletecliente", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){			
			read();		
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("idcliente="+idcliente);
	}
}

function ModalRegister(){
	$('#addCliente').modal('show');
}

function ModalUpdate(idcliente,nombre,direccion,cp,ciudad,email,telefono,apellidos){			
	document.formClienteUpdate.idcliente.value 			= idcliente;
	document.formClienteUpdate.nombre.value 			= nombre;
	document.formClienteUpdate.direccion.value 			= direccion;
	document.formClienteUpdate.cp.value 				= cp;
	document.formClienteUpdate.ciudad.value 			= ciudad;
	document.formClienteUpdate.email.value 				= email;
	document.formClienteUpdate.telefono.value 			= telefono;
	document.formClienteUpdate.apellidos.value 			= apellidos;
	$('#updateCliente').modal('show');
}

/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/