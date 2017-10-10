<?
//автозагрузка классов

spl_autoload_register(function ($class) {
    include $class . '.php';
});

$factory = new PageFactory;
$pdf = $factory->getPage('pdf');
$pdf->createPage();
