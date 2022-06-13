<!DOCTYPE html>
<html>
    <body>
        <div class="container">
        <?php
            $page = "sushi";
            include_once('includes/header.php');
            include_once('includes/head.php');
        ?>
        <br>
        <h4 class="card-title">Bestellen</h4>
        <br>
        <br>
        <form method="post" action="sushi.php">
            <label>Voornaam: </label>
            <input type="text" name="fnaam">
            <br></br>
            <label>Achternaam: </label>
            <input type="text" name="lnaam">
            <br></br>
            <label>Adres: </label>
            <input type="text" name="address">
            <br></br>
            <label>Huisnummer: </label>
            <input type="text" name="housenumber">
            <br></br>
            <label>Postcode: </label>
            <input type="text" name="zipcode">
            <br><br></br>
            <input type="submit" name="verzenden" value="Opslaan">
        </form>



        
        <?php
       
            ?>
            <hr>
            <?php
                include_once('includes/footer.php');
            ?>
        </div>
    </body>
</html>