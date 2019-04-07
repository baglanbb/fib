<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<!-- loader -->
	<div class="loader" id="loader">
		<img src="img/loader2.gif" alt="">
	</div>
	<!-- modal -->
	<div id="container" class="container">
		<h1>Фиббоначи</h1>
		<span class="close-btn" id="close">
			<img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
		</span>

		<form>
			<input type="number" required="" id="numberInput" name="numberInput" placeholder="Введите порядковый номер числа">
			<input type="text" id="answer">
			<a id="calc" class="blue-btn">Найти</a>
			<a id="back" class="red-btn">Назад</a>
		</form>
	</div>

	<!-- button -->
	<div class="showBtn">
		<a id="show" class="blue-btn">Test</a>		
	</div>
	<div class="tableContainer">
		<h1>From DB</h1>
		<table class="table" id="content">
	</div>
	    
	</table>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="js/script.js"></script>
</body>
</html>