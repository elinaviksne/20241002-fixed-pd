<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    
    
    <title>Webinārs</title>
</head>
<body>
    
<a href="blog.php">Blog</a>

<h1>Piesakies Webināram!</h1>

<form action="confirmation.php" method="post">


<input type="text" name = "name"><br>
<input type="email" name = "email"><br>
<select name="level">
  <option value="">--Please choose an option--</option>
  <option value="beginner">Beginner</option>
  <option value="intermediate">Intermediate</option>
  <option value="advanced">Advanced</option>
</select>

<legend>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</legend>

<input type="radio" name="rad-btn" id = "info-yes" value = "yes">
<label for="info-yes">Yes</label>

<input type="radio" name="rad-btn" id = "info-no" value = "no">
<label for="info-no">No</label>

<br>


<input type="submit" value = "Sūtīt">

</form>


<script src = "app.js"></script>


<h1>Jau reģistrējušies:</h1>
<?php 

$names =[
    ["name" => "Janis", "email" => "somemail@renars.lv", "level" => "Beginner"],
    ["name" => "Antra", "email" => "somemail@antra.lv", "level" => "Intermediate"],
    ["name" => "John", "email" => "somemail@john.lv", "level" => "Advanced"],
];

foreach($names as $name){
    echo "Vārds: "
        . $name["name"]
        . ", E-pasts: "
        . $name["email"]
        . ", Līmenis: "
        . $name["level"]
        . "<br>";
}



?>

</body>
</html>