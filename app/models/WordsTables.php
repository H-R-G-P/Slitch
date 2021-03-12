<?php


class WordsTables
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Get the words as objects of the received language
     * @param string $language
     * @return array
     */
    public function getWords(string $language): array
    {
        $this->db->query('SELECT * FROM '.$language.'_words');
        return $this->db->resultSet();
    }

    /**
     * Get array of the words of the received language
     * @param string $language
     * @return array
     */
    public function getArrayWords(string $language): array
    {
        $words = [];
        foreach ($this->getWords($language) as $word) {
            $words[] = $word->word;
        }
        return $words;
    }

    /**
     * Get the not translated words as objects of the received language
     * @param string $language
     * @return array
     */
    public function getNotTranslatedWords(string $language): array
    {
        $this->db->query('SELECT * FROM '.$language.'_notTranslatedWords');
        return $this->db->resultSet();
    }

    /**
     * Get array of the not translated words as objects of the received language
     * @param string $language
     * @return array
     */
    public function getArrayNotTranslatedWords(string $language): array
    {
        $words = [];
        foreach ($this->getNotTranslatedWords($language) as $word) {
            $words[] = $word->word;
        }
        return $words;
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

    /**
     * Delete from database the words of the received language
     * @param array $words
     * @param string $language
     * @return bool
     */
    public function deleteWords(array $words, string $language): bool
    {
        $learnedWords = $this->getArrayWords($language);
        $wordsForDeleting = array_intersect($learnedWords, $words);

        $this->db->query('DELETE FROM '.$language.'_words WHERE word = :word');
        foreach ($wordsForDeleting as $word)
        {
            if (!$this->db->execute(array(':word' => $word)))
            {
                return false;
            }
        }
        return true;
    }

    /**
     * Delete from database the not translated words of the received language
     * @param array $words
     * @param string $language
     * @return bool
     */
    public function deleteNotTranslatedWords(array $words, string $language): bool
    {
        $notTranslatedWords = $this->getArrayNotTranslatedWords($language);
        $wordsForDeleting = array_intersect($notTranslatedWords, $words);

        $this->db->query('DELETE FROM '.$language.'_notTranslatedWords WHERE word = :word');
        foreach ($wordsForDeleting as $word)
        {
            if (!$this->db->execute(array(':word' => $word)))
            {
                return false;
            }
        }
        return true;
    }
}