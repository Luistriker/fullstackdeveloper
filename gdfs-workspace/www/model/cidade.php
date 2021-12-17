<?php
	require_once ("classes/crud.php");

	class cidade extends crud{
		
        protected $table = 'cidade';

		private $nome;

        public function inserir(){
			$sql = "INSERT INTO $this->table (nome) VALUES (:nome)";

			$stmt = DB::prepare($sql);
			$stmt->bindParam(':nome', $this->nome);
			return $stmt->execute();
		}

		public function inserirTudo($nome){
			$this->cidade = $nome;
			
		}

	}
?>