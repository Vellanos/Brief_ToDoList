<form action='./pageTasks.php' method="POST">
    <div class="titre">
        <label for="ADD">Ajouter une tâche</label>
    </div>
    <div class="input-container">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
    </div>
    <div class="input-container">
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
    </div>

    <div class="input-container">
        <label for="important">Important</label>
        <input type="checkbox" name="important" id="important">
    </div>
    <input type="submit" value="Ajouter">
</form>