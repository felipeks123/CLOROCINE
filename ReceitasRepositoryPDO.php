<?php
require "./Conexao.php";
class ReceitasRepositoryPDO
{
    public function listarTodos(): array
    {
        $bd = Conexao ::criar();
        $receitasLista = array();
        $sql = "SELECT * FROM receitas";
        $receitas = $bd->query($sql);
        while ($Receita = $receitas->fetchArray()){
            array_push($receitasLista, $receitasLista);
        
        }
        return $receitasLista;
    }
    public function salvar(Receita $receita): bool
    {
        return false;
    }
}
