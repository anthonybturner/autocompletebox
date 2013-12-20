<?php

/**
 * 
 */
class ZipCodes {
	
	static public function Get($id=null){

		if( isset($id)){
        	 $sql = "SELECT * FROM Addresses WHERE id=$id";
        	return fetch_one($sql);
		}
		else {
			
			$sql = "SELECT * FROM Addresses";
        	return fetch_All($sql);
		}
	}
	
	
	static public function GetSpecial($text=null, $column){
		
		$sql = "SELECT * FROM Addresses WHERE $column LIKE '%$text%'";
          return fetch_special($sql); 

	}
	
	static public function Blank(){
				
		return array('id' => null, 'City' => null , 'State' => null, 'Zipcode' => null, 'County' => null, 'AreaCode' => null);
		
	}
	
	
	//Encodes value of every single item in the list
	static function Encode($row, $conn){
		
		$row2 = array();
		foreach ($row as $key => $value) {
			
			$row2[$key] = $conn->real_escape_string($value);
		}
		
		return $row2;
		
	}
	
	
}
