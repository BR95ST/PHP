<?php
    class Fabricante{
        private $nome, $endereco, $documento;

        public function Fabricante($nome, $endereco, $documento){
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->documento =$documento;
        }

        public function getNome(){
            return $this->nome;
        }

    }

    $abc = new Fabricante("abc", "Algum lugar", "doc");
    var_dump($abc);

    echo $abc->getNome();

?>