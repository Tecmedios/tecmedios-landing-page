<?php
// Import and decode data.json.
$dataPath = './config/data.json';
$jsonContent = file_get_contents($dataPath);
$data = json_decode($jsonContent, true);
if (json_last_error() !== JSON_ERROR_NONE) { die('Error decoding the JSON file' . json_last_error_msg()); }

// Organize data for usage.
$socialLinks = $data['social'];
$companyName = $data['companyName'];
$copyright = $data['copyright'];
$navigation = $data['navigation'];
$hero = $data['hero'];
$services = $data['services'];
$portfolio = $data['portfolio'];

$logoImagePath = './assets/logo.png';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $companyName ?></title>
</head>
<body>
    <header>
        <?php require('./includes/nav.php'); ?>
        <?php require('./includes/hero.php'); ?>
    </header>

    <?php require('./includes/services.php'); ?>
    <?php require('./includes/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>
</html>