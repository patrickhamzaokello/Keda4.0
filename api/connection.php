<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
/**
 * Database class for general connections
 * @server_name The name of the installed server
 * @user_name MYSQL system username
 * @password User password
 * @connection Holds connection variable
 * @port_name Port number that holds mysql
 */


class Database
{
    var $server_name;
    var $user_name;
    var $password;
    var $db_name;
    var $connection;
    var $port_name;

    /**
     * Gets a connection from the installed database server
     * with the global variables
     * @return mysqli_result The connection string or error 
     */


    
    var $local = true;


    function getConnString()
    {

        if ($this->local) {

            $this->server_name = "localhost";
            $this->user_name = "root";
            $this->password = "";
            $this->db_name = "mwonya";
            $this->port_name = "3306";
    
        } else {
            $this->server_name = "178.79.148.46";
            $this->user_name = "streamerMwonyaa";
            $this->password = "upJH4122kzPTY2";
            $this->db_name = "mwonya";
            $this->port_name = "3306";
        }

        try {
            $this->connection = new mysqli($this->server_name, $this->user_name, $this->password, $this->db_name, $this->port_name);
        } catch (\Throwable $th) {
            $this->connection = null;
        }
        return $this->connection;
    }
}