<?php

$pdo = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');

//Исключаем для загрузки формат файлов, которые неподходят
if(isset($_POST['save'])){
    $list = ['.php', '.zip', '.js', '.html'];

    foreach($list as $item)
    {
        if(preg_match("/$item$/",$_FILES['filename']['name']))exit('Расширение файла недоступно для загрузки');
    }
    $type = getimagesize($_FILES['filename']['tmp_name']);
    if($type && ($type['mime'] != 'image/png' || $type['mime'] != 'image/jng' || $type['mime'] != 'image/jpeg'))
    {
        if($_FILES['filename']['name'] < 1024 *1000)
        {
            $upload = 'img/' . $_FILES['filename']['name'];

            if(move_uploaded_file($_FILES['filename']['tmp_name'], $upload)) echo "Файл загружен";
            else echo "Ошибка при загрузке файла";
        }
        else exit("Размер файла превышен");
    }
    else exit("Такой тип файла нельзя использовать");
}

?>
<?php

$title = $_POST["title"];
$discription = $_POST["discription"];


$query = $pdo->prepare("UPDATE text_about SET title=:title, discription=:discription, filename=:filename");
$query->execute(["title"=>$title, "discription"=>$discription, "filename"=>$_FILES['filename']['name']]);