<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">

@csrf
<label>Title:</label>
<input type="text" name="title">
<label>Content:</label>
<input type="text" name="content"><br>
<button type="submit">Send info to db</button>
</form>

</body>
</html>