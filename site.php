<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
			echo $title[0];
		?>
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php
			$connect = mysqli_connect("127.0.0.1", "root", "", "DATABASE_1");

			if ($connect==false) {
				echo "подключение отсутствует:";
			} else {
				echo "подключение прошло удачно:";
			}
			$zapros_text = "SELECT * FROM Blogs";
			$zapros = mysqli_query($connect, $zapros_text);

			if ($zapros==false) {
				echo "Запрос отсутствует:";
			} else {
				echo "Запрос прошло удачно:";
			}

			$result1 = $zapros->fetch_assoc();
			$result2 = $zapros->fetch_assoc();
			$result3 = $zapros->fetch_assoc();
			$result4 = $zapros->fetch_assoc();
			$result5 = $zapros->fetch_assoc();
		?>
		<?php 
			$database = [
				[	"title" => $result1["title"],
					"text" => $result1["text"],
					"img" => $result1["img"],
					"users" => $result1["user"],
				],
				[	"title" => $result2["title"],
					"text" => $result2["text"],
					"img" => $result2["img"],
					"users" => $result2["user"],
				],
				[	"title" => $result3["title"],
					"text" => $result3["text"],
					"img" => $result3["img"],
					"users" => $result3["user"],
				],
				[	"title" => $result4["title"],
					"text" => $result4["text"],
					"img" => $result4["img"],
					"users" => $result4["user"],
				],
				[	"title" => $result5["title"],
					"text" => $result5["text"],
					"img" => $result5["img"],
					"users" => $result5["user"],
				],
			]
		?>
	</div>
	<?php
		if ($_GET["password"]==123) {
			echo "<h1>Сардэчна запрашаем " . $_GET["login"] . "</h1>";
		} else {
			echo "<h1>Сардэчна запрашаем ашуканец. Выхад там--></h1>";
		}
	?>
	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">
			Топ 5 вайфу по мнению лучших жюри нашего портала
		</h1>
		<hr>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php 
			 	for ($i=0; $i < 5; $i++) { 
			 		echo "<h1 class='text-center bg-success mt-5'>
					" . $database_title[$i] . "
					</h1>";
					echo "<p class='text-center'>
						" . $database_text[$i] . "
					</p>";
					echo "<img src='" . $database_img[$i] . "' class='w-100'>";
					echo "<p class='text-center'>
						" . $database_users[$i] . "
					</p>";
			 	}
			 	for ($i=0; $i < 5; $i++) { 
			 		echo "<h1 class='text-center bg-success mt-5'>
					" . $database[$i]["title"] . "
					</h1>";
					echo "<p class='text-center'>
						" . $database[$i]["text"] . "
					</p>";
					echo "<img src='img/" . $database[$i]["img"] . ".jpg' class='w-100'>";
			 	}
			 ?>
		</div>
	</div>
</body>
</html>