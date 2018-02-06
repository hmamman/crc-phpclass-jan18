<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $studens = [
        [
            'name'=>'Hussaini',
            'age'=>'23',
            'level'=>300
        ],
        [
            'name'=>'Bashir',
            'age'=>'23',
            'level'=>300
        ],
        [
            'name'=>'Musa',
            'age'=>'23',
            'level'=>300
        ]

    ];
    ?>

    <table border="1">
    <tr>
        <td>SN</td>
        <td>Name</td>
        <td>Age</td>
        <td>Level</td>
    </tr>
    <?php foreach($studens as $studen):?>
    <tr>
        <td></td>
        <td><?= $studen['name'];?></td>
        <td><?= $studen['age'];?></td>
        <td><?= $studen['level'];?></td>
    </tr>
    <?php endforeach;?>
    </table>
</body>
</html>