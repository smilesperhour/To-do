<?php
  $task = strip_tags($_POST['task']);
  $date = date['Y-m-d'];
  $time = date['H:i:s'];

  include['connect.php'];

  $mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
  $mysqli ->query("INSERT INTO tasks VALUES ('', '$task', '$date', '$time')");

  $query = "SELECT * FROM tasks WHERE task='task' and date='$date' and time= '$time' ";

  if ($result = $mysqli->query($query)){
  	while ($row = $result-> fetch_assoc()) {
  		$task_id =$row['id'];
  		$task_name = $row['task'];
  	}
   }

   $mysqli->close();

   echo '<li><span>' .$task_name. '</span><img id
?>