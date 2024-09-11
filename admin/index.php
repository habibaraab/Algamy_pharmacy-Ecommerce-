<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online |Add products</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
     <style>
body{
background-image: url('lol.AVIF');
background-repeat: no-repeat;
background-size: 100% 100%;
background-attachment: fixed;

}


    </style>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Update products</h2>
                <img src="logo.jpeg" alt="logo" width="200px">
                <br>
                <input type="text" name='name'>
                <br>
                <input type="text" name='price'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> Add photo to product</label>
                <button name='upload'>Up product ✅</button>
                <br><br>
                <a href="products.php">view all products</a>
            </form>
        </div>
       
    </center>
</body>
</html>