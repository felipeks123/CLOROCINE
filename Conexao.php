<?php
class Conexao {
    public static function criar () {
        return new SQLite3("Receitas.db");
    }
}