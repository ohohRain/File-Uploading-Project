<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet">
    <meta charset="UTF-8">
    <title>View Files</title>

</head>

<body>
    <?php
    header("Refresh:60");
    $user_dir = $_SESSION["usr_dir"];
    $user_files = array_diff(scandir($user_dir, 1), array('.', '..'));

    echo "<table>
        <tr>
        <th>File name</th>
        <th>View</th>
        <th>Remove</th>
        </tr>";
    $count = count($user_files) - 1;
    while ($count >= 0) {

        echo "<tr>";

        echo "<td>" . $user_files[$count] . "</td>";

        echo "<td>" . "<form action='readfile.php' method='get'><button name='view' type='submit' value='".$user_files[$count]."'>View</button> </form>". "</td>";

        echo "<td>" . "<form action='rmfile.php' method='post'><button name='rmfile' type='submit' value='".$user_files[$count]."'>Remove</button> </form>" . "</td>";

        echo "</tr>";

        $count -= 1;
    }

    echo "</table>";


    ?>



    <form enctype="multipart/form-data" action="uploader.php" method="POST">
        <p>
            <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
            <label for="uploadfile_input">Choose a file to upload:</label> <input name="uploadedfile" type="file" id="uploadfile_input" />
        </p>
        <p>
            <input type="submit" value="Upload File" />
        </p>
    </form>

    <button onclick="location.href='logout.php'">Logout</button>
</body>

</html>