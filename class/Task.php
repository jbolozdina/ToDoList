<?php 
require_once ("class/DBController.php");
class Task
{
    private $db_handle;
    
    function __construct() {
        $this->db_handle = new DBController();
    }
    
    function addTask($name, $description, $doc) {
        $query = "INSERT INTO tbl_task (name,description,doc) VALUES (?, ?, ?)";
        $paramType = "sss";
        $paramValue = array(
            $name,
            $description,
            $doc
        );
        
        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        return $insertId;
    }
    
    function editTask($name, $description, $doc, $task_id) {
        $query = "UPDATE tbl_task SET name = ?,description = ?,doc = ? WHERE id = ?";
        $paramType = "sssi";
        $paramValue = array(
            $name,
            $description,
            $doc,
            $task_id
        );
        
        $this->db_handle->update($query, $paramType, $paramValue);
    }
    
    function deleteTask($task_id) {
        $query = "DELETE FROM tbl_task WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $task_id
        );
        $this->db_handle->update($query, $paramType, $paramValue);
    }
    
    function getTaskById($task_id) {
        $query = "SELECT * FROM tbl_task WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $task_id
        );
        
        $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
        return $result;
    }
    
    function getAllTask() {
        $sql = "SELECT * FROM tbl_task ORDER BY id";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }
}
?>