<?php

	class Database {
		
		private $conn;
		
		//Method untuk menghubungkan ke Database
		public function connect() {
			$this->conn = new mysqli("localhost", "root", "", "spk_saw");
			return $this->conn;
		}
		
		//Method untuk memutuskan koneksi dengan database
		public function close() {
			return $this->conn->close();
		}
	}
	
?>