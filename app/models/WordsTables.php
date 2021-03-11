<?php


class WordsTables
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Get the words of the received language
     * @param string $language
     * @return array
     */
    public function getWords(string $language): array
    {
        $this->db->query('SELECT * FROM '.$language.'_words');
        return $this->db->resultSet();
    }

    /**
     * Get the not translated words of the received language
     * @param string $language
     * @return array
     */
    public function getNotTranslatedWords(string $language): array
    {
        $this->db->query('SELECT * FROM '.$language.'_notTranslatedWords');
        return $this->db->resultSet();
    }

    /**
     * Add to database the words of the received language
     * @param array $words
     * @param string $language
     * @return bool
     */
    public function addWords(array $words, string $language): bool
    {
        $sql = 'INSERT INTO '.$language.'_words (word) VALUES ';
        foreach ($words as $word) {
            $sql .= "('$word'), ";
        }
        $sql = rtrim($sql, ', ');

        $this->db->query($sql);
        if ($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Add to database the not translated words of the received language
     * @param array $words
     * @param string $language
     * @return bool
     */
    public function addNotTranslatedWords(array $words, string $language): bool
    {
        $sql = 'INSERT INTO '.$language.'_notTranslatedWords (word) VALUES ';
        foreach ($words as $word) {
            $sql .= "('$word'), ";
        }
        $sql = rtrim($sql, ', ');

        $this->db->query($sql);
        if ($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}