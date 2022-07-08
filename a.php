<?php
$path    = './icons';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));

$objs = [];
$obj = [];
foreach($files as $file){
    $filePath = "./icons/" . $file;
    list($width, $height) = getimagesize($filePath);
    $objs[] = [
        "name" => $filePath,
        "width" => $width,
        "height" => $height,
        "fps" => $width / $height
    ];
}
$str = json_encode($objs, JSON_PRETTY_PRINT);
file_put_contents('data.json', $str);

echo "\n\n";
echo $str;
echo "\n\n";
?>
