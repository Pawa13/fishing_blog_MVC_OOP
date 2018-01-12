<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Форум о рыбалке</title>
		<link rel="stylesheet" href="../css/reset.css">
		<link rel="stylesheet" href="../css/style2.css">
	</head>
<body>
	<div>
            <header>
		 <img class="headerimg" src="../img/header2.png"> 
                           <h1>Спиннинг</h1>
            </header>
            <div class="menu">
                  <?php include dirname(__DIR__).'/menus.php';?>
            </div>
              	<div id="main">
                    
                      <?php SpinningArticl::OneArticl($id); ?>
                </div>
            <footer>
                     <?php include dirname(__DIR__).'/sidebar.php';?>
            </footer>
	</div>
</body>
	</html>

      