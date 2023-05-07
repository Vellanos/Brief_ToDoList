<?php
require("./ManagerTasks.php");
$managerTask = new managerTasks();
$allTasks = $managerTask->getAll();

if (isset($_GET['delete'])) {
    $managerTask->delete($_GET['delete']);
  }

if (!empty($_POST['title']) && isset($_POST['description'])) {
  $newTask = new Task();
  $newTask -> setTitle($_POST['title']);
  $newTask -> setDescription($_POST['description']);
  if(isset($_POST["important"])) {
    $newTask->setImportant(1);
  } else {
    $newTask->setImportant(0);
  }

  $managerTask->create($newTask);   

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">

</head>

<body>
  <section class="container">
    <h1><a href="../../../index.php">To Do List</a></h1>
    <?php
        include("./progressTasks.php")
    ?>
    <div class="display">
      <div class="table-container">
        <?php
        include("./listTasks.php")
        ?>
      </div>
      <div class="form-container">
        <?php
        include("./formTasks.php")
        ?>
      </div>
    </div>
  </section>
  <script src="../../js/script.js" type="module"></script>
</body>
</html>