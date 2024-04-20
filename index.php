<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task26</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div>
        <form action="" method="get">
            <input type="text" name="day" id="" placeholder="Enter Day Number">
            <button type="submit">Check Day</button>
        </form>
        <p>
            <?php
            if (!empty($_GET)) {
                $day = $_GET['day'];
                switch ($day) {
                    case '1':
                        echo 'Monday';
                        break;
                    case '2':
                        echo 'Tuesday';
                        break;
                    case '3':
                        echo 'Wednesday';
                        break;
                    case '4':
                        echo 'Thursday';
                        break;
                    case '5':
                        echo 'Friday';
                        break;
                    case '6':
                        echo 'Saturday';
                        break;
                    case '7':
                        echo 'Sunday';
                        break;
                    default:
                        echo 'Invalid Day Number';
                        break;
                }
            }
            ?>
        </p>
    </div>
</body>

</html>