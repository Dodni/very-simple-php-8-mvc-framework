<!-- home_view.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/style.css">
    <script type="text/javascript" src="app/javascript/menu.js"></script>
    <title>Főoldal</title>
</head>
<?php include 'header_view.php'; ?>
<body>
    <div class="container">
        <h1>Főoldal</h1>
    </div>
    <?php if ($_GET['data']=="mar-be-vagy-jelentkezve") {
        echo "<h3>Mar be van jelentkezve!</h3>";
    }
    ?>

    <h1>MENU</h1>
    <p>Ez a világ legjobb nézete!</p>

</body>
<?php include 'footer_view.php'; ?>
</html>
