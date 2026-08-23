<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .flex-container {
            display: flex;
            /* align-items: center; */
            /* Baqi sab items vertically center ho jayenge */
            height: 300px;
            /* flex-direction: row; */
            border: 2px solid black;
        }

        .item {
            background: lightblue;
            padding: 20px;
            margin: 5px;
        }

        .item-3 {
            align-self: flex-end;
            /* Yeh aik item container k bottom par shift ho jayega */
            background: lightcoral;
        }
    </style>
</head>

<body>

<div class="flex-container">
  <div class="item">Item 1 (Center)</div>
  <div class="item">Item 2 (Center)</div>
  <div class="item item-3">Item 3 (Bottom/Flex-end)</div>
</div>


</body>

</html>