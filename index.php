<html>
	<head>
		<title> My site </title>
		
	</head>
	<body>
			<h1> My site </h1>

		<?php
		
			echo "User :" . $_GET['name'] . "," . $_GET['age'];
			echo "<link rel='stylesheet' type='text/css' href='site.css'>";

		?>

		<center>
		<form action="comment.php" method="post">
			<div class="site all">
				<div>
					<div id="up-name">Ваш никнейм</div>
					<input type="text" name="username" placeholder="Username" id="site-display-up">
				</div>
				<div>
					<div id="down-comment">Ваш комментарий</div>
					<textarea name="comment" rows="2" cols="22" placeholder="Comment" id="site-display-down"></textarea>
				</div>
				<div>
					<input type="submit" value="Отправить" id="site-submit">
				</div>
			</div>
		</form>
		</center>
		<ul>
			<?php
				$comments = [
					['username' => 'valera', 'comment' => 'Hello'],
					['username' => 'petya', 'comment' => 'HiValera'],
				];
				foreach ($comments as $item) {
				echo "<li><div class = \"author\">" . $item ['username'] . "</div><div>" . $item ['comment'] . "</div></li>";
				}
			?>
			<?php
				$dbconnection = mysqli_connect ('localhost', 'root', '', 'mysite');
				$query = mysqli_query($dbconnection, 'SELECT * FROM comments');
				// $row = mysqli_fetch_assoc($query);
				// var_dump($row);
				// echo '<br>';
				// $row2 = mysqli_fetch_assoc($query);
				// var_dump($row2);
				while ($row = mysqli_fetch_assoc($query)){
					echo $row ['username'] . '<br>' . $row['comment'];
				}
				// var_dump ($dbconnection);
				// unset($dbconnection);
				// var_dump($dbconnection);
			?>
		</ul>
	</body>
</html>