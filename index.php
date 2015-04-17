<!DOCTYPE html>
<html>
<head>
	<title> Simple To-do</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="wrap">
		<div class="task-list">
			<ul>
			  <?php require("includes/connect.php"); ?>
			</ul>
		</div>
	<form class="add-new-task" autocomplete="off">
	 <input type="text" name="new-task" placeholder="Add new item..."/>
	   </form>
	 </div>
</body>
<script scr="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
	add_task();

	function add_task(){
		$('add-new-task'.submit(function() {
			var new_task = $('add-new-task input[name=new-task]'.val();

			if (new_task != '') {
				$.post('includes/add-task.php', { task: new_task}, function(data) {
					$(('add-new-task input[add-new-task]').val();)
					$(data).appendTo['task-list ul'].hide().fadeIn();
				});
			}

			return false;
		});
	}

</script>
</html>