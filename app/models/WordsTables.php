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
     * Get the untranslatable words as objects of the received language
     * @param string $language
     * @return array
     */
    public function getUntranslatableWords(string $language): array
    {
        $this->db->query('SELECT * FROM '.$language.'_untranslatableWords');
        return $this->db->resultSet();
    }

    /**
     * Get array of the untranslatable words of the received language
     * @param string $language
     * @return array
     */
    public function getArrayUntranslatableWords(string $language): array
    {
        $words = [];
        foreach ($this->getUntranslatableWords($language) as $word) {
            $words[] = $word->word;
        }
        return $words;
    }

    /**
     * Add to database the words in lower case of the received language
     * @param array $words
     * @param string $language
     * @return bool
     */
    public function addWords(array $words, string $language): bool
    {
        $sql = 'INSERT INTO '.$language.'_words (word) VALUES ';
        foreach ($words as $word) {
            $sql .= "('".mb_strtolower($word)."'), ";
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
     * Add to database the untranslatable words in lower case of the received language
     * @param array $words
     * @param string $language
     * @return bool
     */
    public function addUntranslatableWords(array $words, string $language): bool
    {
        $sql = 'INSERT INTO '.$language.'_untranslatableWords (word) VALUES ';
        foreach ($words as $word) {
            $sql .= "('".mb_strtolower($word)."'), ";
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
     * Delete from database the words in lower case of the received language
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
            if (!$this->db->execute(array(':word' => mb_strtolower($word))))
            {
                return false;
            }
        }
        return true;
    }

    /**
     * Delete from database the untranslatable words in lower case of the received language
     * @param array $words
     * @param string $language
     * @return bool
     */
    public function deleteUntranslatableWords(array $words, string $language): bool
    {
        $untranslatableWords = $this->getArrayUntranslatableWords($language);
        $wordsForDeleting = array_intersect($untranslatableWords, $words);

        $this->db->query('DELETE FROM '.$language.'_untranslatableWords WHERE word = :word');
        foreach ($wordsForDeleting as $word)
        {
            if (!$this->db->execute(array(':word' => mb_strtolower($word))))
            {
                return false;
            }
        }
        return true;
    }

    /**
     * Get
     * @param array $words
     * @param string $language
     * @return array
     */
    public function getNotLearnedWordsFrom(array $words, string $language) : array
    {
        return Helper::array_diff_inLowercase(
            $words,
            $this->getArrayWords($language),
            $this->getArrayUntranslatableWords($language)
        );
    }
}