<?php


class StuffTypeTable
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /** Get stuff type
     * @param $id int ID of stuff type
     * @return bool|object Found row from database or FALSE
     */
    public function getStuffType(int $id)
    {
        $this->db->query('SELECT * FROM stuff_type WHERE id = :id');
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

    /** Get all stuff types */
    public function getStuffTypes(): array
    {
        $this->db->query('SELECT st.id, st.name FROM stuff_type st');
        return $this->db->resultSet();
    }
}