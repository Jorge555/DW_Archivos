<?php

	public function getuser()
	{
		$this->load->Model('empleado');
		$data = $this->empleado->getUser();
		header('Content-Type: application/json');
		echo json_encode($data);
	}

?>