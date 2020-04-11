<!DOCTYPE html>

<html lang="en">

<?php include 'php/reusables/head.php' ?>

<body>
    <?php include 'php/reusables/hero.php' ?>

    <div class="productsContainer">
        <div class='productContainer'>
            <div class="product product__image--stock">
                <img src="img/sierra36.jpg" alt="Mahogany Sierra 36 Lever Harp">
            </div>
            <div class="product__info">
                <h1 class='findaharp-title'>Triplett Sierra 36 Lever Harp</h1>
                <h3 class='findaharp-price'>$3000<span>usd</span> / $4300<span>cad</span>
                <br>
                <br>
                <h3 class='findaharp-shortDesc'>Pristine condition. One owner. Purchased in 2011. Just regulated.</h3>
                <br>
                <p class='findaharp-longDesc'>This like new harp has a lovely, gentle, classic sound from one of our finest and most respected harp makers, Triplett Harps. A beautiful instrument that will add joy and warmth to any home. The harp is maple. <button class='btn btn__secondary' onClick='document.getElementById("js--actualHarp").hidden=document.getElementById("js--actualHarp").hidden?document.getElementById("js--actualHarp").hidden=false:document.getElementById("js--actualHarp").hidden=true;'>Click here</button> for photo of actual harp. Rent-to-own available in the Calgary area.</p>      
            </div>
        </div>
        <div class= "productImage--actual findaharp-img" id='js--actualHarp'>
            <img src="img/jeffreyTriplettSierra.jpg" alt="Maple Sierra 36 Lever Harp">
        </div>
        <div class='productContainer'>
            <div class="product product__image--stock">
                <img src="img\Harpsicle-Maple.jpg" alt="Harpsicle Lever Harp">
            </div>
            <div class="product__info">
                <h1 class='findaharp-title'>The ever-popular Rees Harpsicle harp</h1>
                <h3 class='findaharp-price'>$800<span>usd</span> / $1200<span>cad</span>
                <br>
                <br>
                <h3 class='findaharp-shortDesc'>Take this harp for a spin!!</h3>
                <br>
                <p class='findaharp-longDesc'>This fun little harp is great for your roadtrip!</p>      
            </div>
        </div>
        <div class='productContainer'>
            <div class="product product__image--stock">
                <img src="img\DSC03649_407x700.jpg" alt="26-string harp">
            </div>
            <div class="product__info">
                <h1 class='findaharp-title'>Mike Lewis Aries 26</h1>
                <h3 class='findaharp-price'>$1200<span>usd</span> / $1800<span>cad</span>
                <br>
                <br>
                <h3 class='findaharp-shortDesc'>One owner. Purchased in 2005.</h3>
                <br>
                <p class='findaharp-longDesc'>This one is a cutie!!</p>      
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section id="contact">
        <?php include 'php/reusables/contactArea.php' ?>
    </section>
    <!-- FOOTER -->
    <section>
        <?php include 'php/reusables/footer.php' ?>
    </section>
    <script> 
        window.onload = function() {
            document.getElementById("js--actualHarp").hidden=true;
        };
    </script>
</body>