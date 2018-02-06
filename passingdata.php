<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passing Data Between Pages</title>
</head>
<body>
    <form action="process.php" method="post">
        <div>
            <label for="">First Number
            <input type="text" name="first_num" id="">
            </label>
        </div>
        <div>
            <label for=""> Last Number
            <input type="text" name="last_num" id="">
            </label>
        </div>
        <div>
            <button type="submit">Send</button>
        </div>
    </form>
</body>
</html>