<?php  
	class Connect
	{
		private $dns = "mysql:host=localhost;dbname=phamtinh_cosmetic";
		private $user = "phamtinh_tinh";
		private $pass = "phamtinh";
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