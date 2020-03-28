<!DOCTYPE html>

<html lang="en">

<?php include 'php/reusables/head.php' ?>

<body>
    <?php include 'php/reusables/hero.php' ?>

    <div class="salesContainer">
        <div class="sales sales__image" >
            <img src="img/sierra36.jpg" alt="Mahogany Sierra 36 Lever Harp">
        </div>
        <div class="sales sales__info">
            <h1>Triplett Sierra 36 Lever Harp</h1>
            <h3>$3000<span>usd</span> / $4300<span>cad</span>
            <br>
            <br>
            <h3>Pristine condition. One owner. Purchased in 2011. Just regulated.</h3>
            <br>
            <p>This like new harp has a lovely, gentle, classic sound from one of our finest and most respected harp makers, Triplett Harps. A beautiful instrument that will add joy and warmth to any home. The harp is maple (walnut pictured). <button class='btn btn__secondary' onClick='document.getElementById("js--actualHarp").hidden=document.getElementById("js--actualHarp").hidden?document.getElementById("js--actualHarp").hidden=false:document.getElementById("js--actualHarp").hidden=true;'>Click here</button> for photo of actual harp.</p>      
        </div>
    </div>
    <div id='js--actualHarp'>
        <img src="img/jeffreyTriplettSierra.jpg" alt="Maple Sierra 36 Lever Harp">
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
        // // Intersection Observer
        // const images = document.querySelectorAll('img');
        // if ('IntersectionObserver' in window) {  //Most of code courtesy of Chris Nwamba
        //         const options = {
        //             // If the image gets within 50px in the Y axis, start the download.
        //             root: null, // Page as root
        //             rootMargin: '0px',
        //             threshold: 0.1
        //         };
            
        //         const fetchImage = (url) => {
        //             return new Promise((resolve, reject) => {
        //                 const image = new Image();
        //                 image.src = url;
        //                 image.onload = resolve;
        //                 image.onerror = reject;
        //             })
        //                 .catch((err) => {
        //                     console.log('Error in fetchImage', err);
        //                     console.log(url);
        //                 })
        //             ;
        //         }
            
        //         const loadImage = (image) => {
        //             const src = image.dataset.src;

        //             if(src) {
        //                 fetchImage(src).then(() => {
        //                     // console.log(src)
        //                     image.src = src;
        //                 });
        //             }                   
        //         }
            
        //         const handleIntersection = (entries, observer) => {
        //             entries.forEach(entry => {
        //                 if (entry.intersectionRatio > 0) {
        //                     observer.unobserve(entry.target)
        //                     loadImage(entry.target);               
        //                 }
        //             })
        //         }
            
        //         // The observer for the images on the page
        //         const observer = new IntersectionObserver(handleIntersection, options);   
        //         images.forEach(img => {
        //             observer.observe(img);
        //         });                    
        // } else {
        //     const fetchImage = (url) => {
        //         return new Promise((resolve, reject) => {
        //             const image = new Image();
        //             image.src = url;
        //             image.onload = resolve;
        //             image.onerror = reject;
        //         });
        //     }

        //     const loadImage = (image) => {
        //         const src = image.dataset.src;
        //         fetchImage(src).then(() => {
        //             // console.log(src)
        //             image.src = src;
        //         });
        //     }

        //     images.forEach(img => {
        //         loadImage(img);
        //     });
        // }
    </script>
</body>