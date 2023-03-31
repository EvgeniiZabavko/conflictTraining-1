<?php

// $arr = array('a','b','c',);
// $paded = array_pad($arr, 5, 0);

// echo'<pre>';
// print_r ($paded);
// echo'</pre>';



// $arr = array_fill(5, 10, 'aaa');

// echo'<pre>';
// print_r ($arr);
// echo'</pre>';



// $arr = [10, 20, 30,];
// $assoc = array('key' => 'value');



// $row0 = [1, 2, 3];
// $row1 = [4, 5, 6];
// $row2 = [7, 8, 9];
// $arr = array($row0, $row1, $row2);



// $names = ['Denis', 'Denver', 'Jerry', 'Tom'];
// list($a, ,$b) = $names;
// echo $b;



// $data = ['name' => 'Fred', 35, 'company@...'];
// list('name' => $name) = $data;

// echo '<pre>';
// echo $name;
// echo '</pre>';



// $names = ['Denis', 'Denver', 'Jerry', 'Tom'];
// $subset = array_slice($names, 2, 2);

// echo '<pre>';
// print_r($subset);
// echo '</pre>';



// $numbers = [1,2,3,4,5,6,7,8,9];
// $rows = array_chunk($numbers, 3);

// echo '<pre>';
// print_r($rows);
// echo '</pre>';



// $data = ['name' => 'Fred', 'age' => 35, 'email' => 'company@...'];
// $arrayOfKeys = array_keys($data);

// echo '<pre>';
// print_r($arrayOfKeys);
// echo '</pre>';



// $data = ['name' => 'Fred', 'age' => 35, 'email' => 'company@...'];
// $arrayOfValues = array_values($data);

// echo '<pre>';
// print_r($arrayOfValues);
// echo '</pre>';



// $data = ['name' => 'Fred', 'age' => 0, 'email' => 'company@...'];
// if(array_key_exists('age', $data)){
//     echo 'true';
// }



// $data = ['name' => 'Fred', 'age' => 0, 'email' => 'company@...'];
// unset($data['name']);

// echo '<pre>';
// print_r($data);
// echo '</pre>';



// $names = ['Denis', 'Denver', 'Jerry', 'Tom', 'Mike'];
// $new = ['Vika', 'Dima'];
// $removed = array_splice($names, -2, 2, $new);

// echo '<pre>';
// print_r($names);
// print_r($removed);
// echo '</pre>';



// $names = ['1' => 10];    //int indeks    
// $names = ['01' => 10];   //string indeks    
// $names = [8.7 => 10];    //float indeks    
// echo $names[8];          //must be int



// $cartoons = ['Tom', 'Jerry'];
// $tms = ['Denis', 'Denver', 'Jerry'];
// $arr = array_merge($cartoons, $tms); or $arr = [...$cartoons, ...$tms];

// echo '<pre>';
// print_r($arr);
// echo '</pre>';



// $cartoons = ['Tom', 'Jerry'];
// $tms = ['Denis', 'Denver', 'Jerry'];
// array_push($cartoons, 'Cat'); //adds new elements in the end
// array_unshift($cartoons, 'one', 'two'); //adds new elements in the begining

// echo '<pre>';
// print_r($cartoons);
// echo '</pre>';



// $color = 'indigo';
// $shape = 'curvy';
// $floopy = 'none';
// $arr = compact('color', 'shape', 'floopy');

// echo '<pre>';
// print_r($arr);
// echo '</pre>';



// //1
// $str = 'Hello, world!';
// $lenght = strlen($str);
// echo $lenght;

// //2
// $str = 'The quick brows fox jump over the lazy dog';
// $position = strpos($str, 'fox');
// echo $position;

// //3
// $str = 'Hello, world!';
// $substring = substr($str, 0, 5);
// echo $substring;

// //4
// $str = '     Hello, world!   ';
// $substring = trim($str);
// echo $substring;

// //5
// $str = 'apple, banana, orange';
// $fruits = explode(',', $str);
// print_r ($fruits);

// //6
// $str = ['apple', 'banana', 'orange'];
// $fruits = implode(',', $str);
// print_r ($fruits);

// //7
// $str = 'hello, world!';
// $result = ucfirst($str);
// echo $result;

// //8
// $str = 'hello, world!';
// $result = str_shuffle($str);
// echo $result;
?>