<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        button {
            background-color: cornflowerblue;
            text-align: center;
            color: #FFFFFF;
            padding: 10px 30px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h1>Student List</h1>
<a href="form_create.php"><button> Add  </button></a>
<?php

    include_once('DBConnection.php');
    $sql = "SELECT id, firstname, lastname FROM tblStudents where status = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table border='1'>";
            echo "<tr>";
                echo "<td> ID </td>";
                echo "<td> First name </td>";
                echo "<td> Last name </td>";
                echo "<td> Action </td>";
            echo "</tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>" . $row["id"]. "</td>";
                    echo "<td>" . $row["firstname"]. "</td>";
                    echo "<td>" . $row["lastname"]. "</td>";
                    echo "<td><a href='form_update.php?sid=".$row["id"]."&fname=".$row["firstname"]."&lname=".$row["lastname"]."'>Update </a>";
                    echo " | <a href='form_delete.php?sid=".$row["id"]."&fname=".$row["firstname"]."&lname=".$row["lastname"]."'>Delete </a></td>";
                echo "</tr>";
            }

        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
?>

</body>
</html>