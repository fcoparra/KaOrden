<?php

class connex  
{ 
	private $user; 
	private $clave; 
	private $servidor;
  private $conex;

   	function __construct() 
   	{     
		    $this->user = 'root'; 
       	$this->clave = ''; 
       	$this->servidor = 'localhost'; 
       	$this->conex = new mysqli($this->servidor, $this->user, $this->clave,'inventario'); 
   	}

	public function conectar() 
    	{ 
        $this->conex = new mysqli($this->servidor, $this->user, $this->clave, $this->db);
        return $this->conex; 
    	} 
     
    	public function row($pConsulta) 
    	{ 
        	$mostrar = $pConsulta->fetch_assoc();  
        	return $mostrar; 
    	} 
      public function query($pconsulta){
        $query = $this->conex->query($pconsulta);
        return $query;
      }
      public function insercion(){
        return $this->conex->insert_id;
      }
      public function cerrar(){
        return $this->conex->close();
      }
}

?>