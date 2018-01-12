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
                          <h1>Фидер</h1>
            </header>
            <div class="menu">
                  <?php include dirname(__DIR__).'/menus.php';?>
            </div>
            <section id="page">
   		<div id="main">
                    
                      <?php FeederContent::getAlldb(); ?>
                </div>
                <aside>
                       <?php include dirname(__DIR__).'/sidebar.php';?>    
                </aside>
            </section>
            <footer>
                     <?php include dirname(__DIR__).'/sidebar.php';?>
            </footer>
	</div>
</body>
	</html>

      