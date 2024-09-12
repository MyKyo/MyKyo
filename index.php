<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sisfo PKL SMK N 2 Padang Panjang</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
        }

        header, footer {
            background-color: rgb(19, 111, 155);
            color: white;
            text-align: center;
            padding: 10px 0;
            margin: 0;
        }

        nav {
            background-color: rgb(19, 111, 216);
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        #content {
            flex: 1; /* Allows the content area to expand and push the footer down */
            padding: 20px;
        }

        iframe {
            width: 100%;
            height: 700px;
            border: none;
        }
    </style>
</head>
<body>
    
    <!-- Includer For Header -->
    <?php include 'header.php'; ?>

    <!-- Includer For Menu -->
    <?php include 'menu.php'; ?>

    <!-- Main Content With Iframe -->
    <div id="content">
        <iframe name="CFrame" src="crud/home.php"></iframe>
    </div>
    
    <!-- Includer For Footer -->
    <?php include 'footer.php'; ?>

</body>
</html>
