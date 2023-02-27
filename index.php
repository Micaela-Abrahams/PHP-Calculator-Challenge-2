<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator Challenge:</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="answer.php" method="post">
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">

        <select name="operator" id="operator">
            <option value="none">None</option>
            <option value="add">Add (+)</option>
            <option value="subtract">Subtract (-)</option>
            <option value="multiply">Multiply ( * )</option>
            <option value="divide">Divide ( / )</option>
        </select><br>

        <button name="submit" value="submit" type="submit">Calculate</button>
    </form>

</body>

</html>