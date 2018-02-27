<?php require('includes/config.php');



//define page title
$title = 'Home Automation System';

//include header template
require('layout/header.php');
?>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content = "height = device-height, width = 420, user-scalable = no" />
    <title></title>
    <script type="text/javascript" src="/webiopi.js"></script>
    <script type="text/javascript">
        webiopi().ready(function() {
            // Setting the mode of GPIO.24 and GPIO.25 is output
            webiopi().setFunction(26, "out");
            webiopi().setFunction(20, "out");
            webiopi().setFunction(21, "out");

            var content, button;
            content = $("#content");

            // Creat a button
            button = webiopi().createGPIOButton(26, "Relay_CH1");
            content.append(button);

            button = webiopi().createGPIOButton(20, "Relay_CH2");
            content.append(button); // append button to content div

            button = webiopi().createGPIOButton(21, "Relay_CH3");
            content.append(button); // append button to content div

            //
            webiopi().refreshGPIO(false);
        });

    </script>
    <style type="text/css">
        button {
            display: block;
            margin: 5px 5px 5px 5px;
            width: 200px;
            height: 55px;
            font-size: 24pt;
            font-weight: bold;
            color: black;
        }

        .LOW {
            background-color: Red;
        }

        .HIGH {
            background-color: White;
        }
    </style>
    <a style="color: #333333" href="192.168.137.122:8000"><h2>Welcome to Home Automation System</h2></a>
<?php
//include header template
require('layout/footer.php');
?>
<?php
/**
 * Created by PhpStorm.
 * User: Zain Baloch
 * Date: 10/10/2017
 * Time: 4:15 PM
 */