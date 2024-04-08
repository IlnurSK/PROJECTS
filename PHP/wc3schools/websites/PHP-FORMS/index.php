<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        $name = test_input($_POST['name']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = 'Only letters and white space allowed';
        }
    }

    if (empty($_POST['email'])) {
        $emailErr = 'Email is required';
    } else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'Invalid email format';
        }
    }

    if (empty($_POST['gender'])) {
        $genderErr = 'Gender is required';
    } else {
        $gender = test_input($_POST['gender']);
    }

    if (empty($_POST['comment'])) {
        $comment = '';
    } else {
        $comment = test_input($_POST['comment']);
    }

    if (empty($_POST['website'])) {
        $website = '';
    } else {
        $website = test_input($_POST['website']);
        if (!preg_match(
            "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",
            $website
        )) {
            $websiteErr = "Invalid URL";
        }
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php
echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <p style="color: red">* required field</p>
    Name: <input type="text" name="name" value="<?php
    echo $name; ?>">
    <span class="error" style="color: red">* <?php
        echo $nameErr; ?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php
    echo $email; ?>">
    <span class="error" style="color: red">* <?php
        echo $emailErr; ?></span>
    <br><br>
    Website: <input type="text" name="website" value="<?php
    echo $website; ?>">
    <span class="error" style="color: red"><?php
        echo $websiteErr; ?></span>
    <br><br>
    Comment: <textarea name="comment" cols="40" rows="5"><?php
        echo $comment; ?></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender"
        <?php
        if (isset($gender) && $gender == "female") {
            echo 'checked';
        } ?>
           value="female">Female
    <input type="radio" name="gender"
        <?php
        if (isset($gender) && $gender == "male") {
            echo 'checked';
        } ?>
           value="male">Male
    <input type="radio" name="gender"
        <?php
        if (isset($gender) && $gender == "other") {
            echo 'checked';
        } ?>
           value="other">Other
    <span class="error" style="color: red">* <?php
        echo $genderErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input: </h2>";
echo $name;
echo '<br>';
echo $email;
echo '<br>';
echo $website;
echo '<br>';
echo $comment;
echo '<br>';
echo $gender;
?>
</body>
</html>