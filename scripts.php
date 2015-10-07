<?php

echo $_SERVER['QUERY_STRING'], '<br>';
echo $_SERVER['SCRIPT_FILENAME'], '<br>';
echo $_SERVER['PHP_SELF'];


echo 'Текущая дата сервера: ', date('H:i:s d.m.Y');

echo '<br>';

echo 'Ваш ip: ', $_SERVER['REMOTE_ADDR'];

echo '<br>';

define('ST_T', microtime());//начало

echo '<p>Контент страницы, скрипты и т.п.</p>';
for ($i = 0; $i < 1000; $i++) {
  echo $i;
}
echo '<br>';

printf('Страница сгенерирована за %.5f сек.', microtime()-ST_T);//конец

echo '<br>';


$files_arr = scandir('.');
//выведем содержимое массива на экран
echo '<pre>';
print_r($files_arr);
echo '</pre>';

echo filesize('index.php').' байт';

echo '<br>';

echo file_get_contents('http://ya.ru');

echo '<br>';
