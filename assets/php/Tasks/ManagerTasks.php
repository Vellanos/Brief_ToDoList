<?php 

class Task
{
    private $id;
    private $title;
    private $description;
    private $important;

    public function getId() { 
        return $this->id;
    }

    public function setId($id) { 
        $this->id = $id;
    }

    public function getTitle() { 
        return $this->title;
    }

    public function setTitle($title) { 
        $this->title = $title;
    }

    public function getDescription() { 
        return $this->description;
    }

    public function setDescription($description) { 
        $this->description = $description;
    }

    public function getImportant() { 
        return $this->important;
    }

    public function setImportant($important) { 
        $this->important = $important;
    }
   

}

require_once ('../DBManager.php');
class ManagerTasks extends DBManager
{
    public function getAll()
    {
        $res = $this->getConnexion()->query('SELECT * FROM task');
        $tasks = [];

        foreach ($res as $task) {
            $newTask = new Task;
            $newTask->setId($task['id']);
            $newTask->setTitle($task['title']);
            $newTask->setDescription($task['description']);
            $newTask->setImportant($task['important']);

            $tasks[] = $newTask;

        }
        return $tasks; 
    }

    public function create($task) {
        $request = 'INSERT INTO task (title, description, important) VALUE (?,?,?)';
        $query = $this->getConnexion()->prepare($request);
        $query->execute([
            $task->getTitle(), $task->getDescription(), $task->getImportant()
        ]);
        header('Location:pageTasks.php');
        return true;
    }
    public function findById($id)
    {
        $request = 'SELECT * FROM task where id =' . $id;
        $query = $this->getConnexion()->query($request);
        $foundTask = $query->fetch();

        if ($foundTask) {
            $task = new Task();
            $task->setId($foundTask['id']);

            return $task;
        } else {
            return null;
        }
    }

    public function delete($id)
    {
        $taskToDelete = $this->findById($id);

        if ($taskToDelete) {
            $request = 'DELETE FROM task WHERE id =' . $id . ';';
            $query = $this->getConnexion()->prepare($request);
            $query->execute();

            header('Location: pageTasks.php');
            exit();
        }
    }
}
