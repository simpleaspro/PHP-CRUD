<?php

    include_once('DBConnection.php');

    switch ($_POST['type_submit']) {

        case 'create':

            $firstName = $_POST['fname'];
            $lastName = $_POST['lname'];

            $sql = "INSERT INTO tblStudents (firstname, lastname)
                    VALUES ('$firstName', '$lastName')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            break;

        case 'update':

            $firstName = $_POST['fname'];
            $lastName = $_POST['lname'];
            $id = $_POST['sid'];

            $sql = "UPDATE tblStudents SET firstname='$firstName' , lastname ='$lastName' WHERE id= $id";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }

            $conn->close();
            break;
        case 'delete':

            $id = $_POST['sid'];
            $sql = "UPDATE tblStudents SET status='0' WHERE id= $id";
            if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }

        default:
            //do nothing
    }

?>