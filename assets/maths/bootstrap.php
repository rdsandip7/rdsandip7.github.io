<?php
//define base url for the manual
define('BASE_URL', 'http://localhost:7777/math');
 //create array of pages that needs to be displayed
  $pages = [
    'welcome2'=> 'welcome2',
    'linear2' => 'linear2',
    'linear3' => 'linear3',
    'quadratic' => 'quadratic',
    'circle' => 'circle',
    '2side1angle'=>'2side1angle',
    '3sidearea' => '3sidearea',
    'heightbase' => 'heightbase',
    'addition' => 'addition',
    'identical' => 'identical',
    'inverse'=>'inverse',
    'transpose' => 'transpose',
    'multiplication' => 'multiplication',
    'subtraction' => 'subtraction',
    'add' => 'add',
    'sub' => 'sub',
    'multi'=>'multi',
    'scalar'=>'scalar',
    'dotproduct'=>'dotproduct',
    'calculus'=>'calculus'
  ];
  //parse the url and store it in a variable
  $urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  //create an asssociative array of url segments
  $segments = explode('/', $urlArray);
  //assign a variable to the last segment
  $request_page = end($segments);
  
  $page_to_load = 'math/welcome.php';
  foreach ($pages as $key => $value) {
    if($request_page == $key):
      $page_to_load = "math/".$value.".php";
    endif;
  }
?>