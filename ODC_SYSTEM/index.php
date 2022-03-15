

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="style.css">
    
</head>
<body>
    <div class="form1">
        <form method="post"action="process.php">
            <h1>Registration Form</h1>
            <label >First Name</label>
            <input type="text" name="fname"> <br>
            <label >Last Name</label>
            <input type="text" name="lname"> <br>
            <label >Email</label>
            <input type="email" name="email"> <br>
            <label >Next of Kin</label>
            <input type="text" name="nextk"> <br>
            <label >HomeAddress</label>
            <input type="text" name="home_address"><br>
            <button class="btn"type="submit" name="save">Submit</button> 
        </form>
    </div>
</body>
</html>