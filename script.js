document.addEventListener("DOMContentLoaded", () => {
    const taskInput = document.getElementById("taskInput");
    const addTaskButton = document.getElementById("addTaskButton");
    const taskList = document.getElementById("taskList");
  
    // Function to add a new task
    const addTask = () => {
      const taskText = taskInput.value.trim();
      if (taskText === "") {
        alert("Task cannot be empty!");
        return;
      }
  
      // Create list item
      const li = document.createElement("li");
      li.textContent = taskText;
  
      // Add delete button
      const deleteBtn = document.createElement("button");
      deleteBtn.textContent = "Delete";
      deleteBtn.className = "delete-btn";
      deleteBtn.onclick = () => li.remove();
  
      li.appendChild(deleteBtn);
      taskList.appendChild(li);
  
      // Clear input
      taskInput.value = "";
    };
  
    // Add task on button click
    addTaskButton.addEventListener("click", addTask);
  
    // Add task on pressing Enter
    taskInput.addEventListener("keypress", (e) => {
      if (e.key === "Enter") {
        addTask();
      }
    });
  });
  