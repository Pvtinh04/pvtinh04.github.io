<?php  
	class Connect
	{
		private $dns = "mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_f825b108083a1ef";
		private $user = "b28ec8c8d88e3c";
		private $pass = "deb071a7";
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
