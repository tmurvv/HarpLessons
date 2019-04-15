<!DOCTYPE html>

<html lang="en">

<?php include 'php/reusables/head.php' ?>

<body>
    <?php include 'php/reusables/hero.php' ?>

    <div class="main" id="jobs">
        <div class="main__image main__image--hands">
            <!-- <img src="img/tishaHands.jpg" alt="Image Tisha's Technique"> -->
        </div>
        <h1>Harp Lessons with <span>Tisha Murvihill</span></h1>

        <h3> Have you always wanted to play the harp? Let's get started!</h3>
        <ul>
            <li>I teach pedal or lever Harp.</li>
            <li>Skype/Facetime Lessons available.</li>
            <li>I teach adults of all ages and abilities.</li>
            <li>Students under 16 must have passed the grade 2 RCM or equivalent in harp. </li>
            <li>I am located in Cochrane (35 minutes from downtown Calgary). </li>            
            <li>Prices start at $45.00.</li>
            <li><a href="mailto:harp@harptisha.com">harp@harptisha.com</a> for more info</li>
        </ul>
        <div class="main__image main__image--laurentries">
            <img src="https://res.cloudinary.com/take2tech-ca/image/upload/c_scale,h_3,w_5/v1555114546/harptisha/laurenTriesIt.jpg" data-src= "https://res.cloudinary.com/take2tech-ca/image/upload/v1555114546/harptisha/laurenTriesIt.jpg" alt="Harp Student Lauren tries the harp.">
        </div>
        <h4>Qualifications</h4>
        <p>I have a Master's degree in Music Performance from Indiana University School of Music under
            Distinguished Professor Susann McDonald. I have been the Principal Harpist of the <a href="https://www.calgaryphil.com" target="_blank" rel="noopener">
                Calgary Philharmonic
                Orchestra
            </a> since 1995 and have been teaching privately for many years. </p>
        <div class="main__image main__image--dawn">
            <img src="https://res.cloudinary.com/take2tech-ca/image/upload/c_scale,h_3,w_5/v1555114518/harptisha/dawnAsksQuestion.jpg" data-src="https://res.cloudinary.com/take2tech-ca/image/upload/v1555114518/harptisha/dawnAsksQuestion.jpg" alt="Harp Teacher Tisha Demonstrates for Lauren">
        </div>
        <h4>Teaching Philosophy</h4>
        <p>I suppose the best way to describe my teaching style is relaxed and easy-going. I want the harp to be
            fun for you! At the same time, I want you to feel that you are progressing and accomplishing your
            goals. If you want me to prepare you for a career as a professional harpist, I am happy to work with
            you on that. However, if you simply want to play at home for yourself and your friends, we can
            make that happen. Email <a href="mailto:harp@harptisha.com">harp@harptisha.com</a> for more info.</p>
        <div class="main__collage">
            <div class="main__collage--col1">
                <div class="main__image main__image--alita">
                    <img src="https://res.cloudinary.com/take2tech-ca/image/upload/c_scale,h_3,w_5/v1555114520/harptisha/alitaHairFix.jpg" data-src="https://res.cloudinary.com/take2tech-ca/image/upload/v1555114520/harptisha/alitaHairFix.jpg" alt="Harp Teacher Tisha teaches Alita">
                </div>
            </div>
            <div>
                <div class="main__image main__image--karen">
                    <img src="https://res.cloudinary.com/take2tech-ca/image/upload/c_scale,h_3,w_5/v1555114522/harptisha/Demonstrate_Karen_Web.jpg" data-src="https://res.cloudinary.com/take2tech-ca/image/upload/v1555114522/harptisha/Demonstrate_Karen_Web.jpg" alt="Harp Teacher Tisha teaches Karen">
                </div>
                <div class="main__image main__image--lauren">
                    <img src="https://res.cloudinary.com/take2tech-ca/image/upload/c_scale,h_3,w_5/v1555114521/harptisha/demoForLauren.jpg" data-src="https://res.cloudinary.com/take2tech-ca/image/upload/v1555114521/harptisha/demoForLauren.jpg" alt="Harp Teacher Tisha demonstrates a harp technique for Lauren">
                </div>
                <div class="main__image main__image--skype">
                    <img src="https://res.cloudinary.com/take2tech-ca/image/upload/c_scale,h_3,w_5/v1555114552/harptisha/tishaSkypeDemo.jpg" data-src="https://res.cloudinary.com/take2tech-ca/image/upload/v1555114552/harptisha/tishaSkypeDemo.jpg" alt="Harp Teacher Tisha demostrates a harp Skype lesson">
                    <p>Skype Lesson</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <section id="contact">
        <?php include 'php/reusables/contactArea.php' ?>
    </section>
    <!-- About -->
    <section id="about">
        <?php include 'php/reusables/about.php' ?>
    </section>
    <!-- FOOTER -->
    <section>
        <?php include 'php/reusables/footer.php' ?>
    </section>
    <script> 
        // Intersection Observer
        const images = document.querySelectorAll('img');
        if ('IntersectionObserver' in window) {  //Most of code courtesy of Chris Nwamba
                const options = {
                    // If the image gets within 50px in the Y axis, start the download.
                    root: null, // Page as root
                    rootMargin: '0px',
                    threshold: 0.1
                };
            
                const fetchImage = (url) => {
                    return new Promise((resolve, reject) => {
                        const image = new Image();
                        image.src = url;
                        image.onload = resolve;
                        image.onerror = reject;
                    })
                        .catch((err) => {
                            console.log('Error in fetchImage', err);
                            console.log(url);
                        })
                    ;
                }
            
                const loadImage = (image) => {
                    const src = image.dataset.src;

                    if(src) {
                        fetchImage(src).then(() => {
                            // console.log(src)
                            image.src = src;
                        });
                    }                   
                }
            
                const handleIntersection = (entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.intersectionRatio > 0) {
                            observer.unobserve(entry.target)
                            loadImage(entry.target);               
                        }
                    })
                }
            
                // The observer for the images on the page
                const observer = new IntersectionObserver(handleIntersection, options);   
                images.forEach(img => {
                    observer.observe(img);
                });                    
        } else {
            const fetchImage = (url) => {
                return new Promise((resolve, reject) => {
                    const image = new Image();
                    image.src = url;
                    image.onload = resolve;
                    image.onerror = reject;
                });
            }

            const loadImage = (image) => {
                const src = image.dataset.src;
                fetchImage(src).then(() => {
                    // console.log(src)
                    image.src = src;
                });
            }

            images.forEach(img => {
                loadImage(img);
            });
        }
    </script>
</body>