<?php
$message = "";
$name = "";
$prev = "";
$curr = "";
$type = "Residential";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['consumerName'];
    $prev = $_POST['previousReading'];
    $curr = $_POST['currentReading'];
    $type = $_POST['customerType'];

    if ($curr < $prev) {
        $message = '<div class="alert alert-danger mt-3">Invalid Reading: Current reading cannot be lower than previous.</div>';
    } else {
        $usage = $curr - $prev;
        
        if ($usage <= 200) {
            $rate = 10.00;
        } else {
            $rate = 15.00;
        }

        $amount = $usage * $rate;
        $surcharge = ($type == "Commercial") ? 500 : 0;
        $total = $amount + $surcharge;

        $message = '<div class="alert alert-success mt-3">';
        $message .= '<strong>Bill Summary:</strong><br>';
        $message .= 'Consumer Name: ' . $name . '<br>';
        $message .= 'Customer Type: ' . $type . '<br>';
        $message .= 'Usage: ' . $usage . ' kWh<br>';
        $message .= 'Rate per kWh: ' . number_format($rate, 2) . '<br>';
        $message .= 'Total Bill: ' . number_format($total, 2);
        $message .= '</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Eco-Friendly Electric Bill App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1,
        .h4 {
            color: #008000;
        }
        .form-group {
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-8 col-md-6 col-lg-4">
                <div class="card bill-card shadow-sm">
                    <div class="card-body">
                        <h1 class="h4 mt-2 mb-4 text-center">Eco-Friendly Electric Bill App</h1>
                        <form method="POST">
                            <div class="form-group">
                                <label for="consumerName">Consumer Name</label>
                                <input type="text" class="form-control" id="consumerName" name="consumerName" value="<?php echo $name; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="previousReading">Previous Reading</label>
                                <input type="number" step="any" class="form-control" id="previousReading" name="previousReading" value="<?php echo $prev; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="currentReading">Current Reading</label>
                                <input type="number" step="any" class="form-control" id="currentReading" name="currentReading" value="<?php echo $curr; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Customer Type</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="customerType">
                                    <option <?php if($type == "Residential") echo "selected"; ?>>Residential</option>
                                    <option <?php if($type == "Commercial") echo "selected"; ?>>Commercial</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Submit</button>
                        </form>
                        <?php echo $message; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
