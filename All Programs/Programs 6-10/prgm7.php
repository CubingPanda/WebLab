<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1">
    </head>

    <body>
        <h1>Display Current Date & Time</h1>
        <h2>
            <?php
                echo "Server Time: <span style='color:purple';> " . date("h:i:s a")."</span>";
                echo '<br /><br />';
                echo "Today's Date: <span style='color:blue';>" . date("d-m-Y");
                echo '<br />';
                date_default_timezone_set('Asia/Kolkata');
                echo " </span> Current Time: <span style='color:red';>" . date("h:i:s a") . "</span>";
            ?>
        </h2>
    </body>

</html>