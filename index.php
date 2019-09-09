<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment</title>
</head>
<body>
    
    <h1>DamzyLee Nigeria Electrical PLC</h1>

    <form action="index.php" method="POST">

        <p>Please, input consumed unit:</p>
        <input type="number" name="inputUnit" placeholder="Please Enter Unit">
        <input type="submit" name="submit" value="Compute Unit">

    </form>



    <?php 

    
    function billsSolution($units) {

        //Declaring bill charges 
        $units = $_POST['inputUnit'];
        $billFirstCharge = 3.50;
        $billSecondCharge = 4.00;
        $billThirdCharge = 5.20;
        $billFourthCharge = 3.50;


        // If the unit is less or equal t0 50
        if ($units <= 50) {

            $bill = $units * $billFirstCharge;
        }

        // If the unit is less or equal t0 150 but greater than 50
        elseif ($units > 50 && $units <= 150) {

            $firstBill = 50 * $billFirstCharge;
            $remainerUnit = $units - 50;
            $bill = $firstBillirstBill + ($remainerUnit * $billSecondCharge);
            
        }

        // If the unit is less or equal t0 250 but greater than 150
        elseif ($units > 150 && $units <= 250) {

            $firstBill = (50 * $billFirstCharge) + (100 * $billSecondCharge);
            $remainerUnit = $units - 150;
            $bill = $firstBill + ($remainerUnit * $billThirdCharge);

        }

        // If the unit is greater than 250
        elseif ($units > 250) {

            $firstBill = (50 * $billFirstCharge) + (100 * $billSecondCharge) + (100 * $billThirdCharge);
            $remainerUnit = $units - 250;
            $bill = $firstBill + ($remainerUnit * $billFourthCharge);

        }

        return number_format((float)$bill, 2, ".", ",");
    }

    // Onclick of the submit button 

    if ( isset($_POST['submit'])) {
        $units = $_POST['inputUnit'];

        // compute charge if unit is not empty
        if (!empty($units)) {
            $result = billsSolution($units);
            echo "The unit consumed is " . $units . " and the cost charge is " . $result . " Naira only";
        }
    }

    ?>

</body>
</html>