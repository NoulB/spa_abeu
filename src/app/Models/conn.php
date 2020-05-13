<?php



namespace App\Models;


class conn {
    private $_host = '127.0.0.1:8082';
    private $_user = 'root';
    private $_pass = 'T@ds2020';
    private $_database = 'spa';
    public  $_con;

    function __construct()
    {
        $this->conecta();
    }

    function conecta()
    {
        $_con = mysql_connect($this->_host, $this->_user, $this->_pass) or die("Erro ao conectar ao servidor" . mysql_error());
        $_con = mysql_select_db($this->_database) or die("Erro ao selecionar o Banco de Dados &raquo; " . mysql_error());
        return $_con;
    }
}


