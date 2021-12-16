<?php
	require_once ("../classes/crud.php");
    
	class historico extends crud{
		
        protected $table = 'historico';

		private $cidade;
		private $horario;
		private $categoria;
		private $valor;

		public function inserir(){
			$sql = "INSERT INTO $this->table (cidade, horario, categoria, valor) VALUES (:cidade, :horario, :categoria, :valor)";

			$stmt = DB::prepare($sql);
			$stmt->bindParam(':cidade', $this->cidade);
			$stmt->bindParam(':horario', $this->horario);
			$stmt->bindParam(':categoria', $this->ecategoria);
			$stmt->bindParam(':valor', $this->valor);
			return $stmt->execute();
		}

		public function inserirTudo($cidade, $horario, $categoria, $valor ){
			$this->cidade = $cidade;
			$this->horario = $horario;
			$this->categoria = $categoria;
			$this->valor = $valor;
		}

	}
?>