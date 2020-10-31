<?php include('header.php') ?>
<?php include('array.php') ?>
<main>
    <h1>Countries</h1>
    <table>
        <tr class="h">
            <td><b>Country</b></td>
            <td><b>Capital</b></td>
        </tr>

        <?php foreach ($array as $x=>$y): ?>
            <tr>
                <td>
                    <?php echo ($x); ?>
                </td>
                <td>
                    <?php echo ($y); ?>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</main>

<?php include('footer.php'); ?>