<!DOCTYPE html>
<head>
    <title>Pen Name Creator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="display: flex; flex-direction: column; align-items: center; background-image: url('mountains.jpeg'); background-position: center">

<?php
    session_start();
?>

<div class="final-name-box"> <!-- start of styling div -->

<div class="final-name-row">
<div class="final-name-panel">
    <h2><?= $_SESSION['given_arr']['0'] ?></h2>
    <p>
    <?php
        foreach ($_SESSION['final_arr_one'] as $name) {
            echo "$name<br>";
        }
    ?>
    </p>
</div>

<div class="final-name-panel">
    <h2><?= $_SESSION['given_arr']['1'] ?></h2>
    <p>
    <?php
        foreach ($_SESSION['final_arr_two'] as $name) {
            echo "$name<br>";
        }
    ?>
    </p>
</div>
</div>

<div class="final-name-row">
<div class="final-name-panel">
    <h2><?= $_SESSION['given_arr']['2'] ?></h2>
    <p>
    <?php
        foreach ($_SESSION['final_arr_three'] as $name) {
            echo "$name<br>";
        }
    ?>
    </p>
</div>

<div class="final-name-panel">
    <h2><?= $_SESSION['given_arr']['3'] ?></h2>
    <p>
    <?php
        foreach ($_SESSION['final_arr_four'] as $name) {
            echo "$name<br>";
        }
    ?>
    </p>
</div>
</div>

</div> <!-- end of styling div -->

<form action="restart.php">
    <div class="end">
        <button class="form-end">Back</button>
    </div>
</form>

</body>
</html>