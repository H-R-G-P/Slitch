<?php


class LanguagesTable
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /** Get language
     * @param int $id ID of language
     * @return bool|object Found row from database or FALSE
     */
    public function getById(int $id)
    {
        $this->db->query('SELECT * FROM languages WHERE id = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();
        if ($this->db->rowCount() > 0)
        {
            return $this->db->single();
        }
        else
        {
            return false;
        }
    }

    /** Get all languages */
    public function getLanguages(): array
    {
        $this->db->query('SELECT l.id, l.name FROM languages l');
        return $this->db->resultSet();
    }
}