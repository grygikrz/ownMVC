<?php
 /**
 * ownMVC project
 */
 class database extends PDO{
 	
	function __construct() {
		try {
		parent::__construct('mysql:host=localhost;dbname=mvc', 'root', '');  // Update this line with your databese information
		}catch(exception $e){ echo $e->getMessage();}
		}
	
	    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
    {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }
        
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }
 }
