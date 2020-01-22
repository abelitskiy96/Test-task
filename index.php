<html>
	<head>
		<title>WORLD BANK Publications</title>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="script.js"></script>
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body>
	 <div id="page-container">
	 <div id="content-wrap">
		<div class="header">
			<div class="subhead" align="left"><img src="bank.jpg"></div>
			<div class="subhead" align="right"><p class="numb">8-800-100-5005</p>
				 <p class="numb">+7 (3452) 522-000</p></div>
		</div>
		<div class="header">
			<div class="inactive" id="first"><a><p class="smth">Кредитные карты</p></a></div>
			<div class="active"><a><p class="smth">Вклады</p></a></div>
			<div class="inactive"><a><p class="smth">Дебетовая карта</p></a></div>
			<div class="inactive"><a><p class="smth">Страхование</p></a></div>
			<div class="inactive"><a><p class="smth">Друзья</p></a></div>
			<div class="inactive" id="last"><a><p class="smth">Интернет-банк</p></a></div>
		</div>
		<div class="header" id="path">
			<p><a href="index.php">Главная</a> - <a href="index.php">Вклады</a> - Калькулятор</p>
		</div>
		<div class="main">
				<p id="title">Калькулятор</p>
				<form action="" method="post" id="ajax_form" align="center">
					<p class="clcont">Дата оформления вклада <input type="date" name="dt"></p>
					<p class="clcont">Сумма вклада <input type="number" name="summn" min="1000" max="3000000" id="sum1" value="1000" onchange="SetRG1(this.value)"> <input type="range" id="range1" min="1000" max="3000000" step="1" value="1000" oninput="SetVL1(this.value)"></p>
					<p class="clcont">Срок вклада <select name="term">
										<option value="1">1 год</option>
										<option value="2">2 год</option>
										<option value="3">3 год</option>
										<option value="4">4 год</option>
										<option value="5">5 год</option>
									</select></p>
					<p class="clcont">Пополнение вклада <input type="radio" name="isadd" value="false" checked>Нет <input type="radio" name="isadd" value="true">Да</p>
					<p class="clcont">Сумма пополнения вклада <input type="number" name="summadd" min="1000" max="3000000" id="sum2" value="1000" onchange="SetRG2(this.value)"> <input type="range" id="range2" min="1000" max="3000000" step="1" value="1000" oninput="SetVL2(this.value)"></p>
					<div class="resultline"><div class="res"><input type="button" id="btn" value="Вычислить"></div> <div class="res" id="wrd">Результат:</div> <div class="res" id="result_form"></div></div>
				</form>
		</div>
		</div>
		<footer id="footer">
		<div class="foot">
			<div class="divlink"><a class="link" href="index.php">Кредитные карты</a></div>
			<div class="divlink"><a class="link" href="index.php">Вклады</a></div>
			<div class="divlink"><a class="link" href="index.php">Дебетовая карта</a></div>
			<div class="divlink"><a class="link" href="index.php">Страхование</a></div>
			<div class="divlink"><a class="link" href="index.php">Друзья</a></div>
			<div class="divlink"><a class="link" href="index.php">Интернет-банк</a></div>
		</div>
		</footer>
		</div>
	</body>
</html>