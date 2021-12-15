<!DOCTYPE html>
<html lang="en-us">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <title>PHP 1</title>
    </head>
    <body>
        <h1> Order Information:</h1>
        <?php

        $i1 = $_GET["i1"];

        $name = $_GET["first_name"];
        $lname = $_GET["last_name"];
        $address = $_GET["street_address"];
        $phoneNum = $_GET["phone"];
        $card = $_GET["card"];
        $cardNum = $_GET["credit_num"];
        $cardExp = $_GET["exp_date"];
        $total = $_GET["total"];

        print "First Name: $name ";
        print "$lname";
        print "<p>Address: $address</p>";
        print "<p>Phone Number: $phoneNum</p>";
        print "<p>Credit Card Type: $card</p>";
        print "<p>Credit Card #: $cardNum</p>";
        print "<p>Expiration Date: $cardExp</p>";
        print "<p>Total: $total</p>";

        if($choice == 1000.00){
            print "<p>Bundle 1 - $1000.00</p> <br>";
        }
        if($choice == 2000.00){
            print "<p>Bundle 2 - $2000.00</p> <br>";
        }
        if($i3 == 3000.00){
            print "<p>Bundle 3 - $3000.00</p> <br>";
        }
        if($i4 == 10000.00){
            print "<p>Mercenary 1 - $10,000.00</p> <br>";
        }
        if($i5 == 20000.00){
            print "<p>Mercenary 2 - $20,000.00</p> <br>";
        }
        if($i6 == 900000.00){
            print "<p>Sith Empire Army - $900,000.00</p> <br>";
        }
        ?>

        <form action="assign11_a.php" method="POST">
            <input type="submit" name="action" value="Confirm">
         <input type="submit" name="action" value="Cancel">
        </form>
    </body>
</html>