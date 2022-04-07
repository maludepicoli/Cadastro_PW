<?php
include "Conexao.php";
    class Cliente{
        private int $id;
        private string $nome;
        private float $contato;
        private string $endereco;
        private string $dataNasc;
        private string $genero;

            public function __construct(string $nome, float $contato, string $endereco, string $dataNasc, string $genero){
            $this->nome = $nome;
            $this->contato = $contato;
            $this->endereco = $endereco;
            $this->dataNasc = $dataNasc;
            $this->genero = $genero;

        }
        public function Cadastrar(){
            $conexao = new Conexao();
            $sql = "INSERT INTO
            Cliente(nome, contato, endereco, dataNasc, genero)
            VALUES (:nome, :contato, :endereco, :dataNasc, :genero);";
            $pdo = $conexao->Conectar();
            $preparo = $pdo->prepare($sql);
            $preparo->bindParam(':nome', $this->nome);
            $preparo->bindParam(':contato', $this->contato);
            $preparo->bindParam(':endereco', $this->endereco);
            $preparo->bindParam(':dataNasc', $this->dataNasc);
            $preparo->bindParam(':genero', $this->genero);
            $preparo->execute();
        }
        
        

        public static function ListarTodos(){
            $conexao = new Conexao();
            $sql = "SELECT * FROM Cliente";
            $dados = $conexao->Consultar($sql);
            return $dados;
        }
    }