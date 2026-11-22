<?php
$hostname = gethostname();
$phpVersion = phpversion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OpenShift Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        h1 {
            color: #2563eb;
        }

        p {
            color: #444;
        }

        .status {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>PHP Application Running Version 2.0 !</h1>
        <p class="status">Successfully Updated on OpenShift 🚀</p>

        <hr>

        <p><strong>PHP Version:</strong> <?php echo $phpVersion; ?></p>
        <p><strong>Hostname:</strong> <?php echo htmlspecialchars($hostname); ?></p>
        <p><strong>Server Time:</strong> <?php echo date("Y-m-d H:i:s"); ?></p>
    </div>

</body>
</html>
