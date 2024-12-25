<?php
require './layout/header.php';
?>
<h1>To-Do List PHP <?php echo '3 Ribu';?></h1>
<form method="GET" class="input-section">
    <input type="text" name="task" placeholder="Enter your task..." required>
    <button type="submit" name="addTask">Add</button>
</form>
<ul>
    <?php foreach ($_SESSION['tasks'] as $index => $task): ?>
        <li>
            <span><?php echo htmlspecialchars($task); ?></span>
            <form method="POST" style="display:inline;">
                <button type="submit" style="background-color: red;" name="deleteTask" value="<?php echo $index; ?>">Delete</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>
<?php
require './layout/footer.php';
?>