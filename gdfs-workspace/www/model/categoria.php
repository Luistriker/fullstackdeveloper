<?php
	require_once ("classes/crud.php");

	class categoria extends crud{
		
        protected $table = 'categoria';

		private $nome;
        private $bandeira;
        private $valorHora;
        private $valorKm;

        public function inserir(){
			$sql = "INSERT INTO $this->table (nome, bandeira, valorHora, valorKm) VALUES (:nome, :bandeira, :valorHora, :valorKm)";

			$stmt = DB::prepare($sql);
			$stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':bandeira', $this->bandeira);
            $stmt->bindParam(':valorHora', $this->valorhora);
            $stmt->bindParam(':valorKm', $this->valorKm);
			return $stmt->execute();
		}

		public function inserirTudo($nome, $bandeira, $valorHora, $valorKm){
			$this->nome = $nome;
            $this->bandeira = $bandeira;
            $this->valorHora = $valorHora;
            $this->valorKm = $valorKm;
			
		}

	}
?>