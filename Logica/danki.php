<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if(isset($_POST['acao'])){
        echo $_FILES['arquivo']['name'];
    }
?>

<form enctype="multipart/form-data" method="POST">
    <input type="file" name="arquivo">
    <input type="submit" name="acao">

</form>
    
</body>
</html>