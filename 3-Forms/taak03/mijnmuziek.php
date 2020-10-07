<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul method="GET">
<li name="artiest" value="mike">mike</li>
<li name="titel" value="jannes">jannes</li>
<li name="jaaruitkomst" value="1969">1969</li>
<li name="muzieksoort" value="rock">rock</li>

</ul>

    <?php 
echo $_GET['artiest'];
echo $_GET['titel'];
echo $_GET['jaaruitkomst'];
echo $_GET['muzieksoort'];
?>
</body>
</html>






