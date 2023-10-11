<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>View Employee Information</title>
    
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
    <header>
        <div class="logo">Your student Logo</div>
        <nav>
            <ul>
                <li><a href="studentgrades.php"> studentForm</a></li>
                <li><a href="viewstudentgrades.php">View studentgrades</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1> Student Information</h1>
        <?php
//Database Connectivity
            $servername="localhost";
            $username="root";
            $password="";
            $database="studentgrades";

            //creating a connection

            $conn=mysqli_connect($servername, $username, $password, $database);

            //die if connection failed
            if(!$conn)
            {
                die("Sorry, connection failed!!".mysqli_connect_error());
            }
            else
            {
                echo "Connection Sucessfull";
            }

            $sql="SELECT * FROM `studentgrades`";
            $result=mysqli_query($conn, $sql);

            //Find the number of records in the table
            $num=mysqli_num_rows($result);
            echo "<br/>";
            echo $num;

            //Display the records using if statement

            if($num>0)
            {
                $row=mysqli_fetch_assoc($result);
                echo "<br/>";
                echo var_dump($row);
                echo "<br/>";

                $row=mysqli_fetch_assoc($result);
                echo "<br/>";
                echo var_dump($row);
            }
            
            //display records using while statement

            while($row=mysqli_fetch_assoc($result))
            {
                echo "<br/>";
                echo "Here is the records in the Table";
                echo "<br/>";

                echo "First Name: " . $row['fname'] . "  Last Name: " . $row['lname'] . " ID: " .$row['id'] . " date of birth: " .$row['dob'] . " grades in math: " .$row['gradesinMath'] ." percentage: " .$row['percentage'] ." gender: " .$row['gender'] ." class: " .$row['class'];
                echo "<br/>";;
                echo "<br/>";;
                echo "<br/>";
            }

            


?>
</main>

<footer>
    &copy; 2023
</footer>
</body>
</html>
