<?php
class Orm{
    protected $id;
    protected $table;
    protected $db;

    public function __construct($id, $table, PDO $connection)
    {
        $this->id = $id;
        $this->table = $table;
        $this->db = $connection;
    }

    public function getAll(){
        $stm = $this->db->prepare("SELECT * FROM {$this->table}");
        $stm->execute();
        return $stm->fetchAll();
    }
    public function getById($id){
        $stm = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $stm->bindValue(":id", $id);
        return $stm->fetch();
    }
    public function deleteById($id){
        $stm = $this->db->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $stm->bindValue(":id", $id);
        $stm->execute();
        
    }
    public function updateById($id, $data){
        $sql = "UPDATE {$this->table} SET ";
        foreach ($data as $key => $value) {
            $sql .= "{$key} = :{$key}, ";
        }
        $sql = rtrim($sql, ', ');
        $sql .= " WHERE id = :id";
        
        $stm = $this->db->prepare($sql);
        
        foreach ($data as $key => $value) {
            $stm->bindValue(":{$key}", $value);
        }
        $stm->bindValue(":id", $id);
        $stm->execute();
    }
    
    public function insert($data){
        $sql = "INSERT INTO {$this->table} (";
        foreach ($data as $key => $value) {
            $sql.="{$key},";
        }
        $sql = rtrim($sql, ', ');
        $sql.=") VALUES (";
        foreach ($data as $key => $value) {
            $sql.=":{$key},";
        }
        $sql = rtrim($sql, ', ');
        $sql.=")";

        $stm = $this->db->prepare($sql); 
        foreach ($data as $key => $value) {
            $stm->bindValue(":{$key}", $value);
        }
        $stm->execute();
    }
}
?>