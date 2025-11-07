<?php
class db
{
    protected $host;
    protected $user;
    protected $pass;
    protected $db_name;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db_name = "practicaDb";
    }

    public function connect()
    {
        $conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name) or die('Error en la conexión.');
        return $conn;
    }
}
?>