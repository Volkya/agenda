<?php 


class Users extends CI_Model
{
	private $valid;
	function __construct()
	{
		$this->valid = array('size'=>array('nick'=>20,'mail'=>50));
	}

	function validData($data){
		$res = true;
		foreach ($data as $key => $value) {
			if(array_key_exists($key, $this->valid['size'])){
				if(strlen($value)>$this->valid['size'][$key]){
					$this->learfen->outError("$key demasiado largo max. ".$this->valid['size'][$key]);
					$res = false;
				}
			}
		}
		return $res;

	}

	# creamos un usuario
	function registrar($nick,$pass){
		$data = array('nick'=>$nick,'pass'=>$this->learfen->passNew($pass),'reg'=>unix_to_human(time(), TRUE, 'us'),'lv'=>'1','status'=>'1');
		if($this->validData($data) == true){
			if(!$this->existe($nick)){
				$this->db->insert('users',$data);
				$this->learfen->outReturn('Usuario Creado');
			}else{
				$this->learfen->outError('Este usuario ya existe');
			}
		}
	}

	function existe($nick){
		return $this->buscar("nick='$nick' LIMIT 1", 'idUsers', 'exist');
	}

	function buscar($selector,$cols,$extends=''){
		$query = "SELECT $cols FROM users WHERE $selector";
		$query = $this->db->query($query);
		$data = array('cant'=>$query->num_rows());
		if($extends == ''){
			return $query->result();
		}else{
			if($extends == 'exist'){
				if($query->num_rows() > 0){
					return true;
				}else{
					return false;
				}
			}
		}
	}

	function cambiar($selAttr,$selVal,$data){
		$this->db->where($selAttr, $selVal);
		$this->db->update('users', $data);
	}

	function cerrar(){
		session_start();
		$this->cambiar('idUsers',$_SESSION['user'],array('status'=>'0'));
		$_SESSION = array();
		session_destroy();
	}


	# iniciamos la sesion
	function activar($nick, $pass){
		$dataUser = $this->buscar("nick='$nick'",'idUsers,pass');
		$dataUser = (array)$dataUser[0];
		if(sizeof($dataUser)>0){
			if($this->learfen->passValid($pass,$dataUser['pass'])){
				session_start();
				$_SESSION['userKey'] = $this->learfen->passNew($nick);
				$_SESSION['user'] = $dataUser['idUsers'];
				$this->cambiar('idUsers',$_SESSION['user'],array('status'=>'1'));
				$this->learfen->outReturn('Sesion Iniciada');
			}else{
				$this->learfen->outError('Contraseña equivocada');
			}
		}else{
			$this->learfen->outError('El usuario no existe');
		}
	}
}