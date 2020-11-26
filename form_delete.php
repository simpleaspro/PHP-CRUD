<!DOCTYPE html>
<html>
<head>
    <title>Student Delete</title>
    <style>
        button {
            background-color: cornflowerblue;
            text-align: center;
            color: #FFFFFF;
            padding: 10px 30px;
            margin-bottom: 10px;
        }
    </style>
</head>
<form action="model.php" method="post">
    <label for="fname">First name: </label>
    <input type="hidden" name="type_submit" value="delete">
    <input type="hidden" name="sid" value="<?php echo $_REQUEST['sid']?>">
    <input type="text" name="fname" value="<?php echo $_REQUEST['fname']?>"><br><br>
    <label for="lname">Last name: </label>
    <input type="text" name="lname" value="<?php echo $_REQUEST['lname']?>"><br><br>
    <input type="submit" value="Delete">
</form>

<body>
<html>