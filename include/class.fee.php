<?php include_once('class.database.php');
 class ManageFees
 { public $link; function __construct()
 { global $table_prefix; $db_connection = new dbConnection();
 $this->link = $db_connection->connect(); return $this->link; }




 function GetStudentList2($query,$start,$limit) { global $table_prefix;
 if (!preg_match('/ORDER/i', $query)) $order = "ORDER BY `aid` DESC";
 else $order = "";
 if($start==NULL && $limit==NULL) $query = $this->link->query("SELECT * FROM `blog` $query $order");
 else $query = $this->link->query("SELECT * FROM `blog` $query $order LIMIT $start,$limit");
 $counts = $query->rowCount(); $result = $query->fetchAll();
 return $result; }
 

function Getblogdetid($id)
 { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `blog`  WHERE aid=?"); 
 $values = array($id); $query->execute($values); $result = $query->fetchAll(); return $result; } 

	}


?>