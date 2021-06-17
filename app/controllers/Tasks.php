<?php
class Tasks extends Controller {
    public function __construct() {
        $this->taskModel = $this->model('Task');
    }

    public function createTask() {
        $data = [
            'title' => 'Create a new task'
        ];

        $this->view('tasks/createTask', $data);
    }
}