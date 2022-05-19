
<?php error_reporting (E_ALL ^ E_NOTICE);

    
        $server = "localhost";
        $username = "root";
        $password = "magento242";
        $db_name = "forms";
        $conn = mysqli_connect($server, $username, $password, $db_name);

        if (!$conn){
            die("connection to this database failed due to ".mysqli_connect_error()); 
        }
        echo "Successfully connected to the database";

        
        if(isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $teacher_observed = $_POST['tea_obs'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $dob = date('Y-m-d', strtotime($_POST['date']));
            $grade = $_POST['grade'];
            $env = $_POST['class-env'];
            $rank = $_POST['highest-level'];
            $impr = $_POST['impression'];
            $text = $_POST['wonderings'];
            
            $envir = " ";
            $rank_level = " ";

            foreach ($env as $e){
                $envir .= $e.",";
            }
            foreach ($rank as $r){
                $rank_level .= $r.",";
            }

            $name = $fname." ".$lname;
            
            $sql = "INSERT INTO `class_survey`(`name`, `teacher_observed`, `email`, `phone`, `dob`, `grade`, `class_env`, `level_observed`,  `impression`, `wondering`, `date_time`) VALUES ('$name','$teacher_observed','$email','$phone','$dob','$grade','$envir','$rank_level','$impr','$text',current_timestamp())";
            
            if (mysqli_query($conn, $sql)){
                echo "<script>alert('Data submitted successfully')</script>";
            }
            else{
                echo "ERROR: $sql <br> $conn->error";
            }
            $conn->close();
       }
        