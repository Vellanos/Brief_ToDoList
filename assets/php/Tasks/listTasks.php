<ul>
    <?php 
        foreach ($allTasks as $task){
            $removeUrl = 'delete=' . $task->getId();
            $removeLink = '<a href="./pageTasks.php?' . $removeUrl . '"><img class="button-delete" src="../../img/delete_button-removebg-preview.png" alt="bouton delete"></a>';
            $checkbox = '<input type="checkbox" class="check_progress" name="task-' . $task->getId() . '">';

            echo ('<li>'.$removeLink.$task->getTitle() . $checkbox . '</li>');
        }
    ?>
</ul>