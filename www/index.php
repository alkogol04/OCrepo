<?
/*Здесь определение каталога в котором находится скрипт*/
$OCdir = dirname(__FILE__);
/*Добавление имени конфига*/
$OCcfg = $OCdir."\config.cfg";

/*Считывание в массив конфига*/
$OCcfgFile = fopen($OCcfg, "rt");
$OCcfgLines = explode("\n", fread($OCcfgFile, filesize($OCcfg)));
/*----------------------------------------------------------------*/

/*Получение каталога сайта и поиск главной страницы*/
$OCsiteCatalog = $OCcfgLines[1];
$OCsiteMainPage = $OCcfgLines[5];
/*----------------------------------------------------------------*/

/*Делаем редирект на главную страницу сайта*/
header('Location: '.$OCsiteCatalog.$OCsiteMainPage);
?>