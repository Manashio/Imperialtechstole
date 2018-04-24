<?php
class Database{
	public $isConn;
	protected $dataB;
	public function __construct($username = "root", $password="",$host="127.0.0.1",$dbname="imperial_admin",$options = []){
		$this->isConn = TRUE;
		try {
			$this->dataB = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8",$username,$password,$options);
			$this->dataB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->dataB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
	public function Discconect(){
		$this->dataB = NULL;
		$this->isConn = FALSE;
	}
	public function getRow($query, $params = []){
		try {
			$stmt = $this->dataB->prepare($query);
			$stmt->execute($params);
			return $stmt->fetch();
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
	public function getRows($query, $params = []){
		try {
			$stmt = $this->dataB->prepare($query);
			$stmt->execute($params);
			return $stmt->fetchAll();
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
	public function insertData($query, $params = []){
		try {
			$stmt = $this->dataB->prepare($query);
			$stmt->execute($params);
			return TRUE;
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
	public function updateData($query,$params = []){
		$this->insertData($query,$params);	
	}
	public function deleteData($query,$params = []){
		$this->insertData($query,$params);	
	}
}
	try {$conn = new PDO("mysql:host=localhost;dbname=imperial_admin", $username="root", $password="");$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	}catch(PDOException $e){echo $e->getMessage();}
		$db = new Database();
?>