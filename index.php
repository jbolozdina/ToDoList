<?php

require_once ("class/DBController.php");
require_once ("class/Task.php");

$action = '';
$db_handle = new DBController();
if (!empty($_GET["action"])) {
    $action = $_GET["action"];
}
switch ($action) {
    case "task-add":
        if (isset($_POST['add'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $task = new Task();
            $doc = date("Y-m-d");
            $insertId = $task->addTask($name, $description, $doc);
            if (empty($insertId)) {
                $response = array(
                    "message" => "Unable to add",
                    "type" => "error"
                );
            } else {
                header("Location: index.php");
            }
        }
        require_once "web/task-add.php";
        break;
    
    case "task-edit":
        $task_id = $_GET["id"];
        $task = new Task();
        
        if (isset($_POST['add'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $doc = date("Y-m-d");
            
            $task->editTask($name, $description, $doc, $task_id);
            
            header("Location: index.php");
        }
        
        $result = $task->getTaskById($task_id);
        require_once "web/task-edit.php";
        break;
    
    case "task-delete":
        $task_id = $_GET["id"];
        $task = new Task();
        
        $task->deleteTask($task_id);
        
        $result = $task->getAllTask();
        require_once "web/task.php";
        break;
    
    default:
        $task = new Task();
        $result = $task->getAllTask();
        require_once "web/task.php";
        break;
}
?>