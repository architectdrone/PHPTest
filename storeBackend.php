<?php
    $totalCost = 0;
    $totalCost+=$_POST['spaceship']*1000;
    $totalCost+=$_POST['cannon']*300;
    $totalCost+=$_POST['teleporter']*150;
    $totalCost+=$_POST['train']*100;
    $totalCost+=$_POST['house']*30000;
    
    echo '<h1>Checkout</h1>';
    echo '<p> You owe $'. $totalCost .'.00 (Before Shipping) </p>';

    //Shipping
    echo "<p> You selected the ";
    if ($_POST['shipping'] == 'free')
    {
        echo "free";
        $shippingCost = 0;
    }
    else if ($_POST['shipping'] == 'overnight')
    {
        echo "overnight";
        $shippingCost = 50;
    }
    else if ($_POST['shipping'] == 'three')
    {
        echo "three day";
        $shippingCost = 5;
    }
    echo " option, which costs $" . $shippingCost . ".00 </p>"; 

    echo "<table>";
    echo "<tr><b><th>Item</th>     <th>Quantity</th>          <th>Cost</th>         <th>Total</th></b></tr>";
    echo "<tr><td><b>Spaceships</b></td><td>".$_POST['spaceship']."</td><td>$1000.00</td><td>$" . $_POST["spaceship"]*1000 . ".00</td></tr>";
    echo "<tr><td><b>Cannons</b></td><td>".$_POST['cannon']."</td><td>$300.00</td><td>$" . $_POST["cannon"]*300 . ".00</td></tr>";
    echo "<tr><td><b>Teleporters</b></td><td>".$_POST['teleporter']."</td><td>$150.00</td><td>$" . $_POST["teleporter"]*150 . ".00</td></tr>";
    echo "<tr><td><b>Trains</b></td><td>".$_POST['train']."</td><td>$50.00</td><td>$" . $_POST["train"]*50 . ".00</td></tr>";
    echo "<tr><td><b>Houses</b></td><td>".$_POST['house']."</td><td>$30000.00</td><td>$" . $_POST["house"]*30000 . ".00</td></tr>";
    echo "<tr><td><b>Shipping</b></td><td></td><td></td><td>$" . $shippingCost . ".00</td></tr>";
    echo "<tr><td><b>Total</b></td><td></td><td></td><td>$" . ($totalCost+$shippingCost) . ".00</td></tr>";
    echo "</table>";
    echo "<p>Thanks for shopping.</p>"
?>
