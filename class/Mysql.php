<?php
class Mysql implements DB {
    public $host;
    public $port;
    public $user;
    public $password;

    function __construct($host, $port, $user, $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect()
    {
        echo "Connected to ".__CLASS__." on {$this->host}:{$this->port}, user: {$this->user}";
    }

    public function query($sql)
    {
        echo "executing: {$sql}";
    }
}