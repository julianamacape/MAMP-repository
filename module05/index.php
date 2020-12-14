<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAMP Server</title>
</head>
<body>
    <select name="day" id="day">
        <?php
            for ($i=1; $i <=31; $i++) {
        ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
    </select>

    <select name="year" id="year">
        <?php
            for ($i=1900; $i <=2007; $i++) {
        ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
    </select>
</body>
</html>