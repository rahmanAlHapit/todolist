<!DOCTYPE html>
<html>
<head>
	<title>ToDo List </title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-2">
				<h1>Todo List</h1>
				<ul>
					@foreach($todo as td)
					<li>{{ $td->item }}<a class="btn btn-default" href ='delete/{{ $td->id_todo }}'>X</a></li>
					@endforeach
				</ul>
				<form action="/todo" methode="POST">
                    {{ csrf_field() }}
					<div class="form-group">
						<input type="text" class="form-control" name="todo_items" placeholder="Item baru....">		
					</div>
					<button type="submit" class="btn btn-success">Add</button>
				</form>

				<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			</div>
		</div>
	</div>
</body>
</html>