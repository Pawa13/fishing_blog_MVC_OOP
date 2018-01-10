<?php
//обрабатываем запрос forum.test/index.php или forum.test
  $r = "/index.php";
$u = $_SERVER['REQUEST_URI'];
if(preg_match("~$u~", $r)) {
    require_once 'controllers/IndexController.php';
}
//запускаем роутер для обработки других запросов
 else {
      

        class Router
    {
        private $routes;
        //функция получает список роутов из файла routes.php        
        public function __construct() {
            $this->routes = include 'config/routes.php';
        }
        //функция получает URL запрос и удаляет один слеш
        private function getURL() {
            return trim($_SERVER['REQUEST_URI'], "/");
        }
        public function run() {
           $uri = $this->getURL();
            //перебираем массив роутов из routes.php
            foreach ($this->routes as $uriPattern => $path) {
               /* ищем соответствие запроса URL имеющемуся для него роуту
               * в route.php*/
             if (preg_match("~$uriPattern~", $uri)){
                   /* если находим, то разбиваем строку по слешу 
                    * на массив и заносим его в $segments*/
                 $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                   $segments = explode('/',$internalRoute);
                    /* получаем имя контроллера, который будет обрабатывать 
                    * пришедший запрос, извлекая первое слово (элемент) 
                    * из массива $segments и добавляя его к .'Controller'
                    * при этом удаляя его из массива $segments*/
                   $controllerName = array_shift($segments).'Controller';
                   //делаем имя котроллера с заглавной буквы
                   $controllerName = ucfirst($controllerName);
                    /*получаем имя метода (экшна) который будит 
                    * работать в этом контроллере из массива $segments
                    * причем это уже будит второй элемент из этого массива,
                    * т.к. первый был вырезан предидущей итерацией
                    */
                   $actionName = 'action'.ucfirst(array_shift($segments));
                   $parameters = $segments;
                   /*подключаем файл класса контроллера, для чего сначала
                   вычисляем его имя*/
                   $controllerFile = 'controllers/'.$controllerName.'.php';
                   if (file_exists($controllerFile)){
                       include_once ($controllerFile);
                    }
                    //создаем объект подлюченного класса include_once ($controllerFile) 
                    $controllerObject = new $controllerName;
                    //проверяем наличие метода и запускаем его
                    $result = $controllerObject->$actionName($parameters);
                    if ($result != null){
                     /* Внимание! При создании метода этого класса, его имя должно
                     * совпадать с тем что прописано в файле роутов route.php
                     */
                        break;
                         /*после выполнения метода прерываем цикл поиска и фактически
                          * передав управление найденному контроллеру
                          */
                    }
                                 
               }
           }
        }
    }

    $router = new Router;
    $router->run();
 }