<?php
    // $RootPath = $_SERVER["DOCUMENT_ROOT"];
    include('./action.php');
    echo 'chile';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>book deliverer</title>
</head>

<body>
<?php
            $myrow = $obj->fetch_record("books");
            foreach ($myrow as $row) {
                echo $row["id"];
            }
        ?>



</body>
</html>