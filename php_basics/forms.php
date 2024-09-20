<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
</head>

<body>
    <form method="post" target="_blank" action="/signup" enctype="multipart/form-data">
        <fieldset>
            <legend>UserDetails</legend>
            <label for="name">please enter your name </label>
            <input type="text" id="name" name="username">
            <br>
            <label for="email">Enter your email:</label>
            <input type="email" id="email">
            <br>
            <label for="address">please enter your address:</label>
            <textarea name="useraddress" id="address" rows="10" col="10"></textarea>
            <br>
            <label for="dob">DOB:</label>
            <input type="date" name="userdob" id="dob">
            <br>
            <label for="password">Enter your password</label>
            <input type="password" name="username" id="password">
            <br>
            select gender: <br>
            <label for="male">Male</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="female">Female</label>
            <input type="radio" id="female" name="gender" value="female">
            <br>
            <label for="filesupload">Files Upload</label>
            <input type="file" name="filesupload" id="files>
        <br>
        <input type=" submit" value="submit it">
        </fieldset>
        <button>submit kardo</button>

        <?php
        print_r($_FILES);
        $name = $_FILES['images']['name'];
        $tmpname = $_FILES['images']['tmp_name'];
        $path = "uploads/" . $name;
        move_uploaded_file($tmpname, $path);

        ?>

    </form>
</body>



</html>
