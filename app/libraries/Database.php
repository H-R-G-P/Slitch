<?php


/**
 * PDO Database Class <br>
 * Connect to database <br>
 * Create prepared statements <br>
 * Bind values <br>
 * Return rows and result
 */
class Database
{
    private string $host = DB_HOST;
    private string $user = DB_USER;
    private string $pass = DB_PASS;
    private string $dbname = DB_NAME;

    private PDO $dbh;
    private PDOStatement $stmt;
    private string $error;

    public function __construct()
    {
        // Set DSN
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        // Create PDO instance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    /** Prepare statement with query */
    public function query(string $sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    /** Bind values */
    public function bind(string $param, $value, $type = null)
    {
        if (is_null($type))
        {
            switch (true)
            {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;

                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    /** Execute the prepared statement */
    public function execute(array $input_parameters = null) : bool
    {
        return $this->stmt->execute($input_parameters);
    }

    /** Get result set as array of objects */
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /** Get single record as object */
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    /** Get row count */
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}