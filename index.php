<?php
session_start();
include_once 'dbconnect.php';
?>
<!doctype html>
<?php include("layouts/header.php");  ?>
<html lang="ru">

<style rel="stylesheet">


.slider {
  margin-left: 300px;
  position: relative;
  width: 680px;

  box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.75);
}

.slider input[name="switch"] {
  display: none;
}

.switch {
  position: absolute;
  left: 0;
  bottom: -40px;
  text-align: center;
  width: 100%;
}

.switch label {
  display: inline-block;
  width: 8px;
  height: 8px;
  cursor: pointer;
  margin: 0 3px;
  box-shadow: 0 0 2px 0 rgba(0, 0, 0, .8);
  border-radius: 50%;
  border: 5px solid #2f363c;
  background-color: #738290;
}

#btn1:checked~.switch label[for="btn1"] {
  background-color: white;
}

#btn2:checked~.switch label[for="btn2"] {
  background-color: white;
}

#btn3:checked~.switch label[for="btn3"] {
  background-color: white;
}

.slider-inner {
  overflow: hidden;
}

.slides {
  width: 300%;

  transition: all 0.5s;
}

.slides img {
  width: 680px;
  height: 340px;
  float: left;
}
.name_index3{color:white;font-size: 18px;}
.name_index{color:white;font-size: 14px;}
.name_index2{color:blue;font-size: 14px;}
#btn1:checked~slider-inner slides {
  transform: translate(0);
}

#btn2:checked~.slider-inner .slides {
  transform: translate(-680px);
}

#btn3:checked~.slider-inner .slides {
  transform: translate(-1360px);
}
</style>
<body data-page="catalog">
  <div class="slider">
<input type="radio" name="switch" id="btn1" checked>
<input type="radio" name="switch" id="btn2">
<input type="radio" name="switch" id="btn3">

<div class="switch">
  <label for="btn1"></label>
  <label for="btn2"></label>
  <label for="btn3"></label>
</div>

<div class="slider-inner">
  <div class="slides">
    <img src="/img/slider/slid_1.jpg"/>
    <img src="/img/slider/slid_2.jpg"/>
    <img src="/img/slider/slid_3.jpg"/>
  </div>
</div>

</div>
<?php
			$host = 'localhost';  // Хост, у нас все локально
			$user = 'root';    // Имя созданного вами пользователя
			$pass = ''; // Установленный вами пароль пользователю
			$db_name = 'db_texnika';   // Имя базы данных
			$mysqli = mysqli_connect($host, $user, $pass, $db_name);

                $sql_1 = mysqli_query($mysqli, 'SELECT * FROM `goods` WHERE `id` = 1');
                $sql_game_1 = mysqli_fetch_array($sql_1);

				$sql_2 = mysqli_query($mysqli, 'SELECT * FROM `goods` WHERE `id` = 2');
                $sql_game_2 = mysqli_fetch_array($sql_2);

				$sql_3 = mysqli_query($mysqli, 'SELECT * FROM `goods` WHERE `id` = 3');
                $sql_game_3 = mysqli_fetch_array($sql_3);

				$sql_4 = mysqli_query($mysqli, 'SELECT * FROM `goods` WHERE `id` = 4');
                $sql_game_4 = mysqli_fetch_array($sql_4)
                ?>
<div style="margin-top:50px;" class="featured">
			<div class="container">
				<div class="col-md-4 latest">
					<h4 class="name_index3">Последние</h4>
					<div class="late">
						<p class="fashion"><?php echo '<img class="img-responsive " src='.$sql_game_1[photo_1].' alt="Custom Image">';?></p>
						<div class="grid-product">
							<span class="name_index"><?php echo $sql_game_1['good']; ?></span>
							<p class="name_index2"><?php echo $sql_game_1['rating']; ?></p>
						</div>
					<div class="clearfix"> </div>
					</div>
					<div class="late">
						<p class="fashion"><?php echo '<img class="img-responsive " src='.$sql_game_2[photo_1].' alt="Custom Image">';?></p>
						<div class="grid-product">
							<span class="name_index"><?php echo $sql_game_2['good']; ?></span>
							<p class="name_index2"><?php echo $sql_game_2['rating']; ?></p>
						</div>
					<div class="clearfix"> </div>
					</div>
					<div class="late">
						<p class="fashion"><?php echo '<img class="img-responsive " src='.$sql_game_4[photo_1].' alt="Custom Image">';?></p>
						<div class="grid-product">
							<span class="name_index"><?php echo $sql_game_4['good']; ?></span>
							<p class="name_index2"><?php echo $sql_game_4['rating']; ?></p>
						</div>
					<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 latest">
					<h4 class="name_index3">Рекомендуемые</h4>
					<div class="late">
						<p class="fashion"><?php echo '<img class="img-responsive " src='.$sql_game_1[photo_1].' alt="Custom Image">';?></p>
						<div class="grid-product">
							<span class="name_index"><?php echo $sql_game_1['good']; ?></span>
							<p class="name_index2"><?php echo $sql_game_1['rating']; ?></p>
						</div>
					<div class="clearfix"> </div>
					</div>
					<div class="late">
						<p class="fashion"><?php echo '<img class="img-responsive " src='.$sql_game_3[photo_1].' alt="Custom Image">';?></p>
						<div class="grid-product">
							<span class="name_index"><?php echo $sql_game_3['good']; ?></span>
							<p class="name_index2"><?php echo $sql_game_3['rating']; ?></p>
						</div>
					<div class="clearfix"> </div>
					</div>
					<div class="late">
						<p  class="fashion"><?php echo '<img class="img-responsive " src='.$sql_game_4[photo_1].' alt="Custom Image">';?></p>
						<div class="grid-product">
							<span class="name_index"><?php echo $sql_game_4['good']; ?></span>
							<p class="name_index2"><?php echo $sql_game_4['rating']; ?></p>
						</div>
					<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 latest">
					<h4 class="name_index3">Популярные</h4>
					<div class="late">
						<p class="fashion"><?php echo '<img class="img-responsive " src='.$sql_game_1[photo_1].' alt="Custom Image">';?></p>
						<div class="grid-product">
						<span class="name_index"><?php echo $sql_game_1['good']; ?></span>
							<p class="name_index2"><?php echo $sql_game_1['rating']; ?></p>
						</div>
					<div class="clearfix"> </div>
					</div>
					<div class="late">
					<p class="fashion"><?php echo '<img class="img-responsive " src='.$sql_game_2[photo_1].' alt="Custom Image">';?></p>
						<div class="grid-product">
						<span class="name_index"><?php echo $sql_game_2['good']; ?></span>
							<p class="name_index2"><?php echo $sql_game_2['rating']; ?></p>
						</div>
					<div class="clearfix"> </div>
					</div>
					<div class="late">
						<p class="fashion"><?php echo '<img class="img-responsive " src='.$sql_game_4[photo_1].' alt="Custom Image">';?></p>
						<div class="grid-product">
							<span class="name_index"><?php echo $sql_game_4['good']; ?></span>
							<p class="name_index2"><?php echo $sql_game_4['rating']; ?></p>
						</div>
					<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

    <script src="js/vendor/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/vendor/underscore.min.js" type="text/javascript"></script>
    <script src="js/modules/catalog.js" type="text/javascript"></script>
    <script src="js/modules/cart.js" type="text/javascript"></script>
    <script src="js/modules/compare.js" type="text/javascript"></script>
    <script src="js/modules/main.js" type="text/javascript"></script>
</body>
</html>

<?php include("layouts/footer.php");  ?>
