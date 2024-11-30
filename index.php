<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="post">
        <input type="number" name="num1" placeholder="First number">
        <select name="operation">
            <option value="add">Addition</option>
            <option value="sub">Substraction</option>
            <option value="div">Multiplication</option>
            <option value="mul">Division</option>
            <option value="add"></option>
        </select>
        <input type="number" name="num2" placeholder="Second number">
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>
</html>