<?php
	class AnimalVisto{
	//classe entidade	
		private $id;
		private $nome;
		private $idade;
		private $raca;
		private $cor;
		private $porte;
		private $descricao;
		private $foto;
		
		public function __construct(){
		}		
		public function setId($id){
			$this->id = $id;
		}
		public function getId(){
			return $this->id;
		}
		//demais getters e setters
		
		public function getNome(){
			return $this->nome;
		}
		public function setNome($n){
			$this->nome = $n;
		}

		public function getIdade(){
			return $this->idade;
		}
		public function setIdade($i){
			$this->idade = $i;
		}
		
		public function getRaca(){
			return $this->raca;
		}
		public function setRaca($r){
			$this->raca = $r;
		}
		
		public function getCor(){
			return $this->cor;
		}
		public function setCor($c){
			$this->cor = $c;
		}
		
		public function getPorte(){
			return $this->porte;
		}
		public function setPorte($p){
			$this->porte = $p;
		}
		
		public function getDescricao(){
			return $this->descricao;
		}
		public function setDescricao($d){
			$this->descricao = $d;
		}

		public function getFoto(){
			return $this->foto;
		}
		public function setFoto($foto){
			$this->foto = $foto;
		}
	}

?>

