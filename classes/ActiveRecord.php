<?php 
abstract class ActiveRecord{
	public static function getAll($filter=""){
		$db=Database::getInstance();
		$pdo=$db->pdo;
		$r=$pdo->prepare("SELECT * FROM ". static::$table ." ". $filter);
		$r->execute();
		$r=$r->fetchAll(PDO::FETCH_CLASS, get_called_class());
		return $r;
        if (count($r) > 0) {
            return $r;
        } else {
            return false;
        }
	}
	public static function get($id,$filter=""){
		$db=Database::getInstance();
		$pdo=$db->pdo;
		$r=$pdo->prepare("SELECT * FROM " . static::$table . " WHERE " . static::$table_id . "=:p1 " . $filter);
		$r->bindParam(":p1", $id);
		$r->execute();
		$r = $r->fetchAll(PDO::FETCH_CLASS, get_called_class());  
        if (count($r) > 0) {
            return $r[0];
        } else {
            return false;
        } 
	}
	 public function save() {
        $db = Database::getInstance();
        $q = "update " . static::$table . " set ";
        $obj = get_object_vars($this);
        foreach ($obj as $k => $v) {
        	if ($k == static::$table_id)
                continue;
            $q.= $k . " = :" . $k . ", ";
        }
        $q = rtrim($q, ", ");
        $q .= " where " . static::$table_id . " = :id";
        $r = $db->pdo->prepare($q);
        foreach ($obj as $k => &$v) { 
           if ($k == static::$table_id)
                continue;
            $r->bindParam(":" . $k, $v);
        }
        $keyField = static::$table_id;
        $r->bindParam(":id", $this->$keyField);
        if ($r->execute() == 1) {
            return true;
        } else {
            return false;
        }
    }
	public function insert(){
		$db = Database:: getInstance();
        $obj = get_object_vars($this);
        $q = "insert into " . static::$table . " (";
        foreach ($obj as $k => $v) {
			if($k==static::$table_id) continue;
            $q .= $k . ", ";
        }
        $q = rtrim($q, ", ");
        $q .= ")values(";
        foreach ($obj as $k => $v) {
			if($k==static::$table_id) continue;
            $q .= ":" . $k . ", ";
        }
        $q = rtrim($q, ", ");
        $q .= ")";
        $r = $db->pdo->prepare($q);
        foreach ($obj as $k => &$v) {
			if($k==static::$table_id) continue;
            $r->bindParam(":" . $k, $v);
        }
        $r->execute();
        if ($r->rowCount() == 1) {
            return $db->pdo->lastInsertId();
        } else {
            return false;
        }
	}
}
	