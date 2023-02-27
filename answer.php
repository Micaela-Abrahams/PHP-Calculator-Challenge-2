<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- PHP Code -->
    <?
    $num_1 = $_POST['num1'];
    $num_2 = $_POST['num2'];
    $operator = $_POST['operator'];


    if (isset($_POST['submit'])) {

        switch ($operator) {
                // None:
            case "none":
                echo "Error, you did not select an operator! </br> Click the back button to return to the main page & select an operator." . '</br>';
                break;

                // Addition:
            case "add":
                $addResult = $num_1 + $num_2;
                echo "The answer is: $addResult" . '</br>';
                break;

                // Subtraction:
            case "subtract":
                $subtractResult = $num_1 - $num_2;
                echo "The answer is: $subtractResult" . '</br>';
                break;

                // Multiply:
            case "multiply":
                $multiplyResult = $num_1 * $num_2;
                echo "The answer is: $multiplyResult" . '</br>';
                break;

                // Divide:
            case "divide":
                $divideResult = $num_1 / $num_2;
                echo "The answer is: $divideResult" . '</br>';
                break;

                // Default:
            default:
                return "Sorry No command found" . '</br>';
        }
    }

    ?>

    <form action="index.php" method="post">
        <button name='back' value='back' type='back'>Back</button>
    </form>

    <!-- Style for the back button -->
    <style>
        button {
            margin-top: 20px;
            width: 100px;
            height: 40px;
            background-color: #6f23b2;
            color: white;
            border: none;
            border-radius: 10px;
        }
    </style>
</body>

</html>