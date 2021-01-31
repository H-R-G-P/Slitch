<?php


namespace classes;


use mysqli;

class database
{
    private mysqli $mysqli;

    /**
     * @var array Array where key is field 'id' and value is field 'text'.
     */
    private array $history = [];

    /** Shifts the texts so that the last one is removed and the first one is added.
     * @param string $text
     */
    public function addToHistory(string $text)
    {
        $this->setHistory();

        print_r($this->history);

        $query = "update history set text = '". $this->history[2] . "' where id = 3";
        $result = $this->mysqli->query($query);
        if (!$result) {
            exit("Error: " . $this->mysqli->error);
        }

        $query = "update history set text = '". $this->history[1] . "' where id = 2";
        $result = $this->mysqli->query($query);
        if (!$result) {
            exit("Error: " . $this->mysqli->error);
        }

        $query = "update history set text = '". $text . "' where id = 1";
        $result = $this->mysqli->query($query);
        if (!$result) {
            exit("Error: " . $this->mysqli->error);
        }
    }

    public function setHistory()
    {
        $result = $this->mysqli->query("select * from history");
        if (!$result) {
            exit("Error: " . $this->mysqli->error);
        }

        while ($row = $result->fetch_assoc()) {
            $this->history[$row['id']] = $row['text'];
        }

        $result->free();
    }
    
    public function __construct()
    {
        $mysqli = new mysqli("localhost", "slitch", "slitch-psw", "slitch");
        if ($mysqli->connect_errno) {
            printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
            exit();
        }
        $mysqli->set_charset('utf8');
        $this->mysqli = $mysqli;
    }

    public function __destruct()
    {
        $this->mysqli->close();
    }
}