<?php
/* 
*  PDO DATABASE CLASS
*  Connects Database Using PDO
*  Creates Prepeared Statements
*  Binds params to values
*  Returns rows and results
*/

class DB
{
    private $dbh, $dsn, $user, $pass, $error, $stmt; 
	
	public function __construct($persistent = false)
    {
        // Set connection vars
        $this->dsn = getenv('DB_DSN');  
        $this->user = getenv('DB_USERNAME');     
        $this->pass = getenv('DB_PASSWORD');

		// Set options
		$options = array (
			PDO::ATTR_PERSISTENT => $persistent
		);

		try {
			// Create a new PDO instanace
			$this->dbh = new PDO ($this->dsn, $this->user, $this->pass, $options);
		}		
		catch ( PDOException $e ) {
			// Catch any errors
			$this->error = $e->getMessage();
		}
	}

    // Just the connection
	public function conn()
    {
		return $this->dbh;
	}
	
	// Prepare statement with query
	public function query($query)
    {
        try {
            $this->stmt = $this->dbh->prepare($query);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
	}
	
	// Bind values
	public function bind($param, $value, $type = null)
    {
		if (is_null ($type)) {
			switch (true) {
				case is_int ($value) :
					$type = PDO::PARAM_INT;
					break;
				case is_bool ($value) :
					$type = PDO::PARAM_BOOL;
					break;
				case is_null ($value) :
					$type = PDO::PARAM_NULL;
					break;
				default :
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}
	
	// Execute the prepared statement
	public function execute()
    {
        try {
            return $this->stmt->execute();
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
	}
	
	// Get result set as array of objects
	public function resultset()
    {
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	// Get single record as object
	public function single()
    {
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	// Get record row count
	public function rowCount()
    {
		return $this->stmt->rowCount();
	}
	
	// Returns the last inserted ID
	public function lastInsertId()
    {
		return $this->dbh->lastInsertId();
	}

    // Return a trimmed result set
    public function trimResults($results)
    {
        $trimmed = array();
        foreach ($results as $result){
            $trimmed_array = function (&$val) {
                return $val = trim($val);
            };
            array_walk($result, $trimmed_array);
            $trimmed[] = $result;
        }
        return $trimmed;
    }
}