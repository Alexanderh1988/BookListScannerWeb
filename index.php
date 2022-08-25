<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css.css">

    <style>
        body {
            background-image: url('https://wallpaperaccess.com/full/7006038.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-size: 100% 100%;
        }
    </style>
</head>

<br><br><br>

<div class="list-type5">
    <ol>
    <?php

    if ($handle = opendir('.')) {

        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
            	$ext = pathinfo($entry, PATHINFO_EXTENSION);
          	            	if($ext!="php" && $ext!="css"){
               ?>
                    <li>
                        <a href="<?= "$entry\n"; ?>">
                            <?= "$entry\n"; ?>
                        </a>
                    </li>


                <?php
            }
            }
        }

        closedir($handle);
    }


    ?>
    </ol>

</div>

</body>
</html>
