<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data" >
        <input type="file" name="image" autocomplete="off" accept="image/jpg">
        <button type="submit" name="submit" value="submit">submit</button>
    </form>
    <?php 
    if(isset($_POST['submit'])){
        move_uploaded_file($_FILES['image'] ['tmp_name'],"uploads/".$_FILES['image']['name']);
        
    }
    ?>
</body>
</html>