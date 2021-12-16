<?php
	require_once 'db.php';

	abstract class crud extends db{

		protected $table;

		abstract public function inserir();

		public function buscar($id){
			$sql = "SELECT * FROM $this->table WHERE id = :id";
			$stmt = db::prepare($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
		}

		public function buscarTodos(){
			$sql = "SELECT * FROM $this->table";
			$stmt = db::prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
	}

?>