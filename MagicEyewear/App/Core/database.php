<?php

class Database
{
  public function database_connection()
  {
    try{

			$string = DB_TYPE .":host=".DB_HOST.";dbname=".DB_NAME.";";
			return $database = new PDO($string,DB_USER,DB_PASS);
			
		}catch(PDOExecption $e){

			die($e->getMessage());
		}
  }//End of database_connection()

  public function read($query, $data=[])
  {
    $database = $this->database_connection(); 
    $statement = $database->prepare($query); //database statement

    if(count($data)==0)
    {
      $statement = $database->query($query); 
      $check = 0; 
      
      if($statement)
      {
        $check = 1;  
      }
    
    }//End of if count

    else
    {
      $check = $statement->execute($data);
    }

    if($check)
    {
      $data = $statement->fetchAll(PDO::FETCH_OBJ);
      if(is_array($data) && count($data) > 0)
			{
				return $data;
			}

			return false;
		}//End of if check
    else
		{
			return false;
		}

  }//End of read()


public function write($query, $data=[])
{
    $database = $this->database_connection(); 
    $statement = $database->prepare($query); //database statement

    if(count($data)==0)
    {
      $statement = $database->query($query); 
      $check = 0; 
      
      if($statement)
      {
        $check = 1;  
      }
    
    }//End of if count

    else
    {
      $check = $statement->execute($data); 
    }

    if($check)
    {
      return true;
    }
    else
    {
      return false;
    }

  }//End of write()


} // End of class

?>