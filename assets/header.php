<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.A. - 1</title>
    
    <?php if(basename($_SERVER['PHP_SELF'], ".php") == 'index') { ?>
        <link rel="stylesheet" href="assets/style.css">
    <?php   }    else { ?>
        <link rel="stylesheet" href="style.css">
    <?php    }    ?>
    
    <link href="https://fonts.googleapis.com/css2?family=Share&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="logo">
        <?php if(basename($_SERVER['PHP_SELF'], ".php") == 'index') { ?>
            <img id="glasses" src="assets/mustglasses.gif" alt="logo">
        <?php   }    else { ?>
            <img id="glasses" src="mustglasses.gif" alt="logo">
        <?php    }    ?>
        <p>Web-Dev</p>
        </div>
        <div class="nav-links">
            <?php if(basename($_SERVER['PHP_SELF'], ".php") == 'index') { ?>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="assets/table.php">Countries</a>
                    </li>
                    <li>
                        <a href="assets/form.php">Form</a>
                    </li>
                </ul>
            <?php   }    else { ?>
                <ul>
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="table.php">Countries</a>
                    </li>
                    <li>
                        <a href="form.php">Form</a>
                    </li>
                </ul>
            <?php    }    ?>
        </div>
    </nav>
