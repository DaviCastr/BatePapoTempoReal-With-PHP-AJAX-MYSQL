<?php 
	class Usuario 
	{
		private $id;
		private $nome;
		private $email;
		private $genero;
		private $nacionalidade;
		private $senha;
		private $telefone;

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getGenero(){
			return $this->genero;
		}

		public function setGenero($genero){
			$this->genero = $genero;
		}

		public function getNacionalidade(){
			return $this->nacionalidade;
		}

		public function setNacionalidade($nacionalidade){
			$this->nacionalidade = $nacionalidade;
		}

		public function getSenha(){
			return $this->senha;
		}

		public function setSenha($senha){
			$this->senha = $senha;
		}

		public function getTelefone(){
			return $this->telefone;
		}

		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}
	}
?>