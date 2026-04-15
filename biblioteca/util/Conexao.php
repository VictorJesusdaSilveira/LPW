<?php

class Conexao {
    private PDO $conexao = null;

    public function getConexao(): PDO {
        if ($this->conexao == null) {
            //Criar a conexão
        }
        return $this->conexao;
    }
}



?>
