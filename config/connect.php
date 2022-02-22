<?php  
	class Connect
	{
		private $dns = "mysql:host=localhost;dbname=id18502244_phamtinh_cosmetics";
		private $user = "id18502244_phamtinh";
		private $pass = "Pvtinh_01678187820";
		protected $pdo = null;

		function __construct()
		{
			try{
				$this->pdo = new PDO($this->dns, $this->user, $this->pass);
				$this->pdo->query("SET NAMES utf8");

			}catch(PDOException $e){
				echo $e->getMessage();
				exit();
			}
		}
	}

?>
