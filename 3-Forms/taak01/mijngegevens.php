<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "invoer.html";?>
    <title>Document</title>
</head>
<body>
    <P>welcome      <?php echo $_GET["fname"];?><br>
       achternaam:  <?php echo $_GET["lname"];?><br>
       klas:        <?php echo $_GET["klas"];?><br>
       leeftijd:    <?php echo $_GET["leeftijd"];?><br>
       adres:       <?php echo $_GET["adres"];?><br>
       plaats:      <?php echo $_GET["plaats"];?><br>
       favomuziek:  <?php echo $_GET["favomu"];?><br></p>
</body>
</html>