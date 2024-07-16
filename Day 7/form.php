<!DOCTYPE html>
<head>
    <style>
        .error {color: red;}
    </style>
</head>
<body>
    <?php
    $name = $age = $email = $phone_number = $income = $feedback = "";
    $nameErr = $ageErr = $emailErr = $phone_numberErr = $incomeErr = $feedbackErr = "";

    if($_SERVER ["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }
        if(empty($_POST["age"])) {
            $ageErr = "Age is required";
        } else {
            $age = test_input($_POST["age"]);
        }
        if(empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }
        if(empty($_POST["phone-number"])) {
            $phone_numberErr = "Phone number is required";
        } else {
            $phone_number = test_input($_POST["phone-number"]);
        }
        if(empty($_POST["income"])) {
            $incomeErr = "Income is required";
        } else {
            $income = test_input($_POST["income"]);
        }
        if(empty($_POST["feedback"])) {
            $feedbackErr = "Please fill the feedback";
        } else {
            $feedback = test_input($_POST["feedback"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Form Validation using PHP</h2>
    <p><span class="error">* Required field</span></p>
    <form method="post" action = 
    "<?php 
    echo htmlspecialchars($_SERVER["PHP_SELF"]); 
    ?>">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    Age: <input type="number" name="age">
    <span class="error">* <?php echo $ageErr; ?></span>
    <br><br>
    Email: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    Phone number: <input type="number" name="phone-number">
    <span class="error">* <?php echo $phone_numberErr; ?></span>
    <br><br>
    Income: <input type="number" name="income">
    <span class="error">* <?php echo $incomeErr ?></span>
    <br><br>
    Feedback: <textarea name="feedback" rows="5" cols="40"></textarea>
    <span class="error">* <?php echo $feedbackErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
    </form>

    <?php 
    echo "<h2>Your Input: </h2>";
    echo $name; echo "<br>";
    echo $age; echo "<br>";
    echo $email; echo "<br>";
    echo $phone_number; echo "<br>";
    echo $income; echo "<br>";
    echo $feedback; echo "<br>";
    ?>
</body>
</html>