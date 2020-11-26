<!DOCTYPE html>
<html>
<head>
    <title>Student Create</title>
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
    <input type="hidden" name="type_submit" value="create">
    <input type="text" name="fname"><br><br>
    <label for="lname">Last name: </label>
    <input type="text" name="lname"><br><br>
    <input type="submit" value="Submit">
</form>

<body>
<html>
