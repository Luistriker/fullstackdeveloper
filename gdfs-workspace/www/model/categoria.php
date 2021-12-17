<?php
	require_once ("classes/crud.php");

	class categoria extends crud{
		
        protected $table = 'categoria';

		private $nome;
        private $bandeirada;
        private $valorHora;
        private $valorKm;

        public function inserir(){
			$sql = "INSERT INTO $this->table (nome, bandeirada, valorHora, valorKm) VALUES (:nome, :bandeirada, :valorHora, :valorKm)";

			$stmt = DB::prepare($sql);
			$stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':bandeirada', $this->bandeirada);
            $stmt->bindParam(':valorHora', $this->valorhora);
            $stmt->bindParam(':valorKm', $this->valorKm);
			return $stmt->execute();
		}

        public function buscarPorNome($nome){
			$sql = "SELECT * FROM $this->table WHERE nome = :nome";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':nome', $nome);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
		}


		public function inserirTudo($nome, $bandeirada, $valorHora, $valorKm){
			$this->nome = $nome;
            $this->bandeirada = $bandeirada;
            $this->valorHora = $valorHora;
            $this->valorKm = $valorKm;
			
		}

	}
?>