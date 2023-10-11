<!doctype html>
<html lang="en">
    <head>
        <title>Student information</title>
        <link rel="stylesheet" href="stylephp.css">
    </head>
    <body>
        <header>
        <div class="logo"> Information</div>
        <nav>
        <li><a href="studentgrades.php">Studentform</a></li>
                <li><a href="viewstudentgrades.php">View studentgrades</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Student grades</h1>
        <form action="C:\xampp\htdocs\student\studentgrades.php" method="post">
            <label for="fname">first name</label>
            <input type="text" name="fname" id="fname"><br/>
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname"><br/>
            <label for="id">ID</label>
            <input type="text" name="id" id="id"><br/>
            <label for="dob">date of birth</br>
            <input type="number" name="dob" id="dob"></br>
            <label for="gradesinMath">grades in math</label>
            <input type="text" name="gradesinMath" id="gradesinMath"></br>
            <label for="gender">gender </label>
            <input type="text" name="gender" id="gender"></br>
            <label for="percentage">percentage</label>          
            <input type="text" name="percentage" id="percentage"></br>
            <label for="class">class</label>           
            <input type="text" name="class" id="class"></br>
            <button type="submit">SUBMIT</button>
        </form>

        <?php
        if($_SERVER['REQUEST_METHOD']='POST')
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
             $id=$_POST['id'];
             $dob=$_POST['dob'] ;
             $gradesinMath=$_POST['gradesinMath'] ;
             $gender=$_POST['gender'];
             $percentage=$_POST['percentage'];
             $class=$_POST['class'] ;
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
                //submit the insertion queries/data to database
               $sql= "INSERT INTO `studentgrades`  (`fname`, `lname`, `ID`, `dob`, `gradesinMath`, `percentage`, `gender`, `class`)VALUES  (`fname`, `lname`, `ID`, `dob`, `gradesinMath`, `percentage`, `gender`, `class`) ";
               $result=mysqli_query($conn,$sql);
                if($result)
                {
                    echo "Data inserted successfully";

                }
                else{
                    echo "Data not inserted due to  ".mysqli_error($conn);
                }
            }

        }
        
        


        ?>
        </main>
        <footer>
        &copy; 2023
    </footer>
    </body>
</html>



    