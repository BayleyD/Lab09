<html>
    <body>
        <?php
            $shipping;
            echo "<h2>Thank you for your purchase ". $_POST["username"] ."!<h2>";
            echo "<h3>Password : ". $_POST["password"] ."<h3>";
            echo "<h2>Reciept<h2>";
            echo "<table>";
            echo "<tr><th> </th><th> Quantity </th><th> Cost Per Item </th><th> Sub Total </th></tr>";
            echo "<tr><th> Art </th><th> ". $_POST["artQ"] ." </th><th> $50 </th><th> $". $_POST["artQ"]*50 ."</th></tr>";
            echo "<tr><th> Armor </th><th> ". $_POST["armorQ"] ." </th><th> $500 </th><th> $". $_POST["armorQ"]*500 ."</th></tr>";
            echo "<tr><th> Sword </th><th> ". $_POST["swordQ"] ." </th><th> $100 </th><th> $". $_POST["swordQ"]*100 ."</th></tr>";
            echo '<tr><th> Shipping </th><th colspan = "2">'. $_POST["shipping"] .'</th>';
            if( $_POST["shipping"] == "Free Shipping" ){
                echo '<th> $0 </th>';
                $shipping = 0;
            } else if ( $_POST["shipping"] == "3 Day Shipping" ){
                echo '<th> $5 </th>';
                $shipping = 5;
            } else {
                echo '<th> $50 </th>';
                $shipping = 50;
            }
            echo '</tr>';
            echo '<tr><th colspan = "3"> Total Cost </th>';
            $total = $_POST["artQ"]*50 + $_POST["armorQ"]*500 + $_POST["swordQ"]*100 + $shipping;
            echo '<th> $'. $total . '</th></tr>';
            echo "<table>";
        ?>
    </body>
    <link href = "style.css" rel = "stylesheet" type = "text/css">
</html>