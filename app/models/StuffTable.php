<?php


class StuffTable
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Find stuff by name and description
     * @param $name string name
     * @param $description string description
     * @return bool
     */
    public function findStuffBy(string $name, string $description): bool
    {
        $this->db->query('SELECT * FROM stuff WHERE name = :name');
        $this->db->bind(':name', $name);
        $this->db->execute();
        if ($this->db->rowCount() > 0)
        {
            $this->db->query('SELECT * FROM stuff WHERE description = :description');
            $this->db->bind(':description', $description);
            $this->db->execute();
            if ($this->db->rowCount() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    /**
     * Add stuff
     * @param Stuff $stuff
     * @return bool
     */
    public function add(Stuff $stuff): bool
    {
        $this->db->query('INSERT INTO stuff (name, 
                                                 year_of_issue, 
                                                 type_id, 
                                                 language_id, 
                                                 description, 
                                                 text, 
                                                 words, 
                                                 word_count, 
                                                 user_id) VALUES (:name, 
                                                                  :year_of_issue, 
                                                                  :type_id, 
                                                                  :language_id, 
                                                                  :description, 
                                                                  :text, 
                                                                  :words, 
                                                                  :word_count, 
                                                                  :user_id)');

        $this->db->bind(':name', $stuff->getName());
        $this->db->bind(':year_of_issue', $stuff->getYearOfIssue());
        $this->db->bind(':type_id', $stuff->getTypeId());
        $this->db->bind(':language_id', $stuff->getLanguageId());
        $this->db->bind(':description', $stuff->getDescription());
        $this->db->bind(':text', $stuff->getText());
        $this->db->bind(':words', $stuff->getWords());
        $this->db->bind(':word_count', $stuff->getWordCount());
        $this->db->bind(':user_id', $stuff->getUserId());

        if ($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /** Delete stuff from database */
    public function delete(int $id): bool
    {
        $this->db->query('DELETE FROM stuff s WHERE s.id = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();
        if ($this->db->rowCount() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Edit data of stuff
     * @param Stuff $editedStuff
     * @return bool
     */
    public function edit(Stuff $editedStuff) : bool
    {
        $this->db->query('UPDATE stuff SET name = :name, 
                                               year_of_issue = :year_of_issue, 
                                               type_id = :type_id, 
                                               language_id = :language_id, 
                                               description = :description, 
                                               text = :text, 
                                               words = :words, 
                                               word_count = :word_count
                                               WHERE id = :id');

        $this->db->bind(':name', $editedStuff->getName());
        $this->db->bind(':year_of_issue', $editedStuff->getYearOfIssue());
        $this->db->bind(':type_id', $editedStuff->getTypeId());
        $this->db->bind(':language_id', $editedStuff->getLanguageId());
        $this->db->bind(':description', $editedStuff->getDescription());
        $this->db->bind(':text', $editedStuff->getText());
        $this->db->bind(':words', $editedStuff->getWords());
        $this->db->bind(':word_count', $editedStuff->getWordCount());
        $this->db->bind(':id', $editedStuff->getId());

        if ($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /** Get all stuffs as objects from database */
    public function getStuffsByUserId(int $id): array
    {
        $this->db->query('SELECT 
                              s.id as id,
                              s.name as name,
                              s.year_of_issue as yearOfIssue,
                              st.name as type,
                              l.name as language,
                              s.description as description,
                              s.text as text,
                              s.words as words,
                              s.word_count as wordCount,
                              s.number_of_views as numberOfViews,
                              s.added_at as addedAt,
                              s.user_id as userId
                              FROM stuff s
                              INNER JOIN users u
                              ON s.user_id = u.id
                              INNER JOIN languages l 
                              ON s.language_id = l.id
                              INNER JOIN stuff_type st 
                              ON s.type_id = st.id 
                              WHERE s.user_id = :user_id
                              ORDER BY s.added_at DESC');
        $this->db->bind(':user_id', $id);
        return $this->db->resultSet();
    }

    /** Get stuff as objects from database
     * @param int $id
     * @return object|false
     */
    public function getStuffById(int $id)
    {
        $this->db->query('SELECT 
                              s.id as id,
                              s.name as name,
                              s.year_of_issue as yearOfIssue,
                              st.name as type,
                              st.id as typeId,
                              l.name as language,
                              l.id as languageId,
                              s.description as description,
                              s.text as text,
                              s.words as words,
                              s.word_count as wordCount,
                              s.number_of_views as numberOfViews,
                              s.added_at as addedAt,
                              s.user_id as userId
                              FROM stuff s
                              INNER JOIN users u
                              ON s.user_id = u.id
                              INNER JOIN languages l 
                              ON s.language_id = l.id
                              INNER JOIN stuff_type st 
                              ON s.type_id = st.id 
                              WHERE s.id = :stuff_id');
        $this->db->bind(':stuff_id', $id);
        if ($object = $this->db->single())
        {
            return $object;
        }
        else
        {
            return false;
        }
    }

    /** Find stuff by ID */
    public function findById(int $id) : bool
    {
        $this->db->query('SELECT * FROM stuff WHERE id = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();
        if ($this->db->rowCount() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}