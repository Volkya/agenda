<?php

class Learfen
{
	public $result;
	function __construct()
	{
		$this->result = array('error'=>'','out'=>'');
	}

           function passNew($pass){
		return password_hash($pass, PASSWORD_DEFAULT, ["cost"=>12]);
           }

           function passValid($pass,$passSaved){
		return password_verify($pass, $passSaved);
           }

	function outError($error){
		$this->result['error'] .= $error;
	}

	function outReturn($data){
		$this->result['out'] = $data;
	}

            function outPrint($dataIn=''){
		if($dataIn==''){
			print_r(json_encode($this->result));
		}else{
			print_r(json_encode($dataIn));
		}
	}
}

 ?>