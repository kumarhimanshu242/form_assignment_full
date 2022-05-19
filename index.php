<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OBSERVATION SURVEY</title>
    <link rel="stylesheet" href="style.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,500;1,600&family=Quicksand&display=swap" rel="stylesheet">
    
    <?php
    include ("connection.php");
    ?>

</head>
<body>
    
    <div class="container">
        <center>
        <div class="head">
            <h1 class="heading"><strong>Classroom Observation Survey</strong></h1>
            <h4 class="subheading">Please take a few minutes to fill out when conducting an observation</h4>
        </div>
        </center>
        <div class="main">
            <!-- Form starts -->
            <form action="index.php" method="post">

                <!-- Name -->
                <div class="name">
                    <label for="name">Name of observer :</label>
                </div>

                <div class="name">
                    <input class="fname" type="text" id="name" name="fname" placeholder="First name" required>
                    <input class="lname" type="text" name="lname"  placeholder="Last name" required><br>
                </div>

                <!-- Teacher observed -->
                <div>
                    <label for="dropdown">Teacher Observed :</label>
                    <select class="single-input" id="dropdown" name="tea_obs" placeholder="Select an option" required>
                        <option value="All students are intelligent and disciplined">All students are intelligent and disciplined</option>
                        <option value="Some students are not disciplined, facing problems in studies">Some students are not disciplined, facing problems in studies</option>
                        <option value="Students are facing problems in studies">Students are facing problems in studies</option>
                        <option value="All students need special attention">All students need special attention</option>
                    </select>
                </div>

                <!-- email -->
                <div class="email">
                    <label for="email">Email :</label>
                </div>
                <div class="email">
                    <input type="email" name="email" id="email" placeholder="Enter Email" required>
                </div><br><br>

                <!-- phone -->
                <div class="phone-num">
                    <label for="phone">Phone No. :</label>
                </div>
                <div class="phone-num">
                    <input type="number" name="phone" id="phone" maxlength="10" minlength="10" placeholder="Enter your phone number" required>
                </div><br><br>

                <!-- date of birth -->
                <div class="date">
                    <label for="date">Date of Birth :</label>
                </div>
                <div class="date ">
                    <input type="date" name="date" class="dob" required>
                </div><br><br>

                <!-- grade-level -->

                <div class="radio-grade" >
                    Grade Level :
                </div>
                <div class="radio-grade grade">
                    <input type="radio" id="grade1" name="grade" value="6">
                    <label for="grade1">6</label>
                    <input type="radio" id="grade2" name="grade" value="7">
                    <label for="grade2">7</label>
                    <input type="radio" id="grade3" name="grade" value="8">
                    <label for="grade3">8</label>
                    <input type="radio" id="grade4" name="grade" value="8">
                    <label for="grade4">9</label>
                    <input type="radio" id="grade5" name="grade" value="8">
                    <label for="grade5">10</label>
                </div><br>

                <!-- classroom environment -->
                <div class="checkbox-class-env" style="position:relative; bottom:100px; ">
                    Classroom Environment :
                </div> 
               <div class="checkbox-class-env class-envv">
                    <input type="checkbox" name="class-env[]" class="class-env" id="class-env1" value="Classroom is clean" >
                    <label for="class-env1">Classroom is clean</label><br>
                    <input type="checkbox" name="class-env[]" class="class-env"id="class-env2" value="Board Configuration is up-to-date">
                    <label for="class-env2">Board Configuration is up-to-date</label><br>
                    <input type="checkbox" name="class-env[]" class="class-env"id="class-env3" value="Standards are posted and visible to all students">
                    <label for="class-env3">Standards are posted and visible to all students</label><br>
                    <input type="checkbox" name="class-env[]" class="class-env"id="class-env4" value="Board Configuration is not up-to-date">
                    <label for="class-env4">Board Configuration is not up-to-date</label><br>
                    <input type="checkbox" name="class-env[]" class="class-env"id="class-env5" value="Standards are not posted">
                    <label for="class-env5">Standards are not posted</label><br>

                </div><br>

                <!-- Rank based on highest level observed -->
                <div class="checkbox-highest-level" style="position:relative; bottom:60px; ">
                    Bloom's Taxonomy (Rank <br>based on highest <br>level observed) :
                </div>
                 <div class="checkbox-highest-level high-level"> 
                    <input type="checkbox" name="highest-level[]" class="highest-level" id="highest-level1" value="Remembering">
                    <label for="highest-level1">Remembering</label><br>
                    <input type="checkbox" name="highest-level[]" class="highest-level" id="highest-level2" value="Understanding">
                    <label for="highest-level2">Understanding</label><br>
                   <input type="checkbox" name="highest-level[]" class="highest-level" id="highest-level3" value="Applying">
                    <label for="highest-level3">Applying</label><br>
                    <input type="checkbox" name="highest-level[]" class="highest-level" id="highest-level4" value="Analyzing">
                    <label for="highest-level4">Analyzing</label><br>
                    <input type="checkbox" name="highest-level[]" class="highest-level" id="highest-level5" value="Evaluating">
                    <label for="highest-level5">Evaluating</label><br>
                    <input type="checkbox" name="highest-level[]" class="highest-level" id="highest-level6" value="Creating">
                    <label for="highest-level6">Creating</label>

                </div><br><br>

                <!-- Overall Impression of Class -->
                <div class="radio-impression" style="position:relative; bottom:60px;">
                    Overall Impression of Class : 
                </div>
                <div class="radio-impression impression">
                    <input type="radio" id="impression1" name="impression" value="Learning is taking place by all children" > 
                    <label for="impression1">Learning is taking place by all children</label><br>
                    <input type="radio" id="impression2" name="impression" value="Learning is taking place by most children">
                    <label for="impression2">Learning is taking place by most children</label><br>
                    <input type="radio" id="impression3" name="impression" value="Learning is taking place by a some children">
                    <label for="impression3">Learning is taking place by a some children</label><br>
                    <input type="radio" id="impression4" name="impression" value="Learning is taking place by few children">
                    <label for="impression4">Learning is taking place by few children</label>
                </div><br><br>


                <!-- textarea -->
                <div class="text">
                    <label for="wonderings">Wonderings :</label>
                </div>
                <div class="text">
                    <input type="textarea" class="wonderings" name="wonderings" placeholder="Please share your experience">
                </div><br><br>
                <!-- buttons -->
                <div class="button">
                    <input type="submit" name="submit" id="submit-btn" value="Submit">
                    <input type="reset" id="reset-btn" value="Reset">
                </div>
            </form>
        </div>

        <div class="footer">
            
        </div>
    </div>
    
</body>
</html>



