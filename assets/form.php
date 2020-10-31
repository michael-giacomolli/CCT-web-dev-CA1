<?php include('header.php') ?>
<?php include('array.php') ?>

<main>
    <h1>Form</h1>
    <form action="" method="POST">
        Inform a country:</br>
        <input type="text" name="country"></br>
        <input type="submit" value="check" class="button">
    </form>
<p class="server">
    <?php
        if ( 'POST' === $_SERVER['REQUEST_METHOD'] )
        {
            $countryuser = ucfirst($_POST["country"]);
            //not working
            trim($countryuser); //Erases white-spaces
            strtolower($countryuser); //everything to lower
            ucfirst($countryuser); //first to uppercase
            
            echo "<br>". $countryuser ;

            if (array_key_exists($countryuser,$array))
            {
                echo  "`s capital is:<br><br>".$array[$countryuser];
            }
            else
            {
                echo "<br><br>Country not found in our database!";
            }
        }
    ?>
</p>
</main>


<?php include('footer.php'); ?>