<?php
	//conexao com o banco de dados 
	class conexaoMySQL
	{
		protected $servidor;
		protected $usuario;
		protected $senha;
		protected $banco;
		protected $conexao;
	
		//variaveis protegidas
		
		public function __construct()
		{
			$this->servidor 	="localhost";
			$this->usuario		="root";
			$this->senha		="";
			$this->banco		="c3po";
			self::conectar();
		//variaveis do banco de dados login senha e banco de dados a conexao e feita automatica 
		}
		
		function conectar()
		{
			$this->conexao = @mysql_connect($this->servidor,$this->usuario,$this->senha) or
										die("Não foi possível conectar com o servidor de banco de dados".mysql_error());
			
			$this->banco  = @mysql_select_db($this->banco) or 
										die("Não foi possível conectar com o Banco de dados".mysql_error());		
		// conexao com o banco de dados 
		}
	}