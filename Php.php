<html>

<head>

    <meta charset="utf-8">

</head>

<body>

    <div class="container">
        <?php $multi_x = 24; ?>

        <h1> ตารางสูตรคูณแม่ <?php echo $multi_x ?> </h1>

        <div class="multiply_x">
            <?php

            for ($i = 1; $i <= 24; $i++) {

                echo "{$multi_x} x {$i} = " . ($multi_x * $i) . "<br/>" . "<br/>";
            }

            ?>
        </div>
    </div>

    <style>
        .container {

            display: flex;
            width: 100%;
            justify-content: center;
            flex-direction: column;
            align-items: center;

        }

        body {

            display: flex;
            height: 90vh;
            justify-content: center;
            background-color: black;

        }

        h1 {

            text-transform: uppercase;
            font-size: 50px;
            color: red;

        }

        .multiply_x {

            width: 200px;
            height: calc(100vh - 15rem);
            overflow-y: scroll;

            color: white;
            font-size: 1.5rem;
            text-align: center;

        }

    </style>
</body>

</html>