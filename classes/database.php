<?php


namespace classes;


use mysqli;

class database
{
    private mysqli $mysqli;

    /** Shifts the texts so that the last one is removed and the first one is added.
     * @param string $text
     */
    public function addToHistory(string $text)
    {
        $this->addText($text);
        $textId = $this->getLargestTextId();
        $history = $this->getHistory();

        $query = "update history set id_texts = {$history[2]} where position = 3";
        $result = $this->mysqli->query($query);
        if (!$result) {
            exit("MySQL error: " . $this->mysqli->error);
        }

        $query = "update history set id_texts = {$history[1]} where position = 2";
        $result = $this->mysqli->query($query);
        if (!$result) {
            exit("MySQL error: " . $this->mysqli->error);
        }

        $query = "update history set id_texts = $textId where position = 1";
        $result = $this->mysqli->query($query);
        if (!$result) {
            exit("MySQL error: " . $this->mysqli->error);
        }

        $query = "DELETE FROM slitch.texts WHERE id = {$this->getSmallestTextId()}";
        $result = $this->mysqli->query($query);
        if (!$result) {
            exit("MySQL error: " . $this->mysqli->error);
        }
    }

    /** Add text and preview (first 200 symbols) to table 'texts'.
     * @param string $text
     * @return void
     */
    private function addText(string $text)
    {
        $text = $this->mysqli->real_escape_string($text);
        if (strlen($text) <= 200)
        {
            $query = "INSERT INTO slitch.texts (text, preview) VALUES ('$text', '$text')";
            $result = $this->mysqli->query($query);
        }
        else
        {
            if (substr($text, 200, 1) === '\\')
            {
                $preview = substr($text, 0, 199);
            }
            else
            {
                $preview = substr($text, 0, 200);
            }
            $query = "INSERT INTO slitch.texts (text, preview) VALUES ('$text', '$preview')";
            $result = $this->mysqli->query($query);
        }
        if (!$result) {
            exit("MySQL error: " . $this->mysqli->error);
        }
    }

    /**
     * @return int Smallest id from table 'texts'.
     */
    private function getSmallestTextId()
    {
        $query = "select id from texts order by id asc limit 1";
        $result = $this->mysqli->query($query);
        if (!$result) {
            exit("MySQL error: " . $this->mysqli->error);
        }
        $row = $result->fetch_assoc();
        return $row['id'];
    }

    /**
     * @return int Largest id from table 'texts'.
     */
    private function getLargestTextId()
    {
        $query = "select id from texts order by id desc limit 1";
        $result = $this->mysqli->query($query);
        if (!$result) {
            exit("MySQL error: " . $this->mysqli->error);
        }
        $row = $result->fetch_assoc();
        return $row['id'];
    }

    /**
     * @return array Array where key is position in history and value is id of text.
     */
    private function getHistory()
    {
        $result = $this->mysqli->query("select position, id_texts from history");
        if (!$result) {
            exit("Error: " . $this->mysqli->error);
        }

        while ($row = $result->fetch_assoc()) {
            $history[$row['position']] = $row['id_texts'];
        }
        $result->free();

        return $history;
    }

    /** Return text from database on received position.
     * @param int $position
     * @return string Text
     */
    public function getTextOnPosition(int $position)
    {
        $query = "select text from history inner join texts t on history.id_texts = t.id where position=$position";
        $result = $this->mysqli->query($query);
        if (!$result) {
            exit("MySQL error: " . $this->mysqli->error);
        }
        $row = $result->fetch_assoc();
        return $row['text'];
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
}/*

$db = new database();

$db->addToHistory("ihiuhib'njoinnio'mjnijn");*/