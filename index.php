<!DOCTYPE html>

<html lang="en">

<?php include 'php/reusables/head.php' ?>

<body>
    <?php include 'php/reusables/hero.php' ?>

    <div class="mainBoard" id="jobs">
        <h1>Harp Lessons with<br> Tisha Murvihill
        </h1>
        <div class="mainBoard__bankImage">
            <img src="img/tishaHands.jpg" alt="Image Tisha's Technique">
        </div>
        <h3> Have you always wanted to play the harp? Let's get started!
        <div class="mainBoard__bankImage">
            <img src="img/karenCentered.jpg" alt="Image Tisha's Technique">
        </div>
        <ul>
            <li>I teach pedal or lever Harp.</li>
            <li>I teach adults of all ages and abilities.</li>
            <li>Students under 16 must have passed the grade 2 RCM or equivalent in harp.
</li>
            <li>I am located in Cochrane (35 minutes from downtown Calgary).
</li>
            <li>Skype/Facetime Lessons available.
</li>
            <li>Prices start at $49.50.
</li>
            <li>harp@harptisha.com for more info</li>
        </ul>
        <div class="mainBoard__bankImage">
            <img src="img/alitaHairFix.jpg" alt="Tisha teaches Alita">
        </div>
        <h4>Qualifications</h4>
        <p>I have a Master's degree in Music Performance from Indiana University School of Music under Distinguished Professor Susann McDonald. I have been the Principal Harpist of the Calgary Philharmonic Orchestra since 1995 and have been teaching privately for many years.
</p>    <h4>Teaching Philosophy</h4>
<p>I suppose the best way to describe my teaching style is relaxed and easy-going. I want the harp to be fun for you! At the same time, I want you to feel that you are progressing and accomplishing your goals. If you want me to prepare you for a career as a professional harpist, I am happy to work with you on that. However, if you simply want to play at home for yourself and your friends, we can make that happen. Email harp@harptisha.com for more info.</p>
        <div class="mainBoard__bankImage">
            <img src="img/demoForLauren.jpg" alt="Tisha Demos for Lauren">
        </div>
        <div class="mainBoard__bankImage">
            <img src="img/dawnAsksQuestion.jpg" alt="Dawn asks a question">
        </div>
        <div class="mainBoard__bankImage">
            <img src="img/tishaSkypeDemo.jpg" alt="Tisha Demos Skype Lesson">
        </div>
    <!-- Contact -->
    <section id="contact">
        <?php include 'php/reusables/about.php' ?>
    </section>
    <!-- FOOTER -->
    <section>
        <?php include 'php/reusables/footer.php' ?>
    </section>

</body>

<!-- </html>

<div class="addTransaction">
            <h3>Add
                <span>Transaction</span>
            </h3>
            <div class="addTransaction__form">
                <form action="index.php" method="post">
                    <label for="type">Type: </label>
                    <select name="type" class="addSearch__form--selectBoxes-item" id="">
                        <option value="" disabled selected>Select type</option>
                        <?php 
                            //Create and run Type Selector Query
                            $query = "SELECT * FROM transactionType ORDER BY transactionType";
                            $transactionTypes = $db->select($query);
                        ?>
                        <?php while($typeRow = $transactionTypes->fetch_assoc()) : ?>
                        
                        <option value="<?php echo $typeRow['transactionType']; ?>">
                            <?php echo $typeRow['transactionType']; ?>
                        </option>
                        <?php endwhile; ?>
                        
                    </select>
                    <label for="date">Date: </label>
                    <input name="date" type="date" placeholder="enter date">
                    <label for="note">Note: </label>
                    <input name="note" type="text" placeholder="enter note">
                    <label for="amount">Amount: </label>
                    <input name="amount" type="text" placeholder="enter amount">
                    <input type="submit" name="submit" class="btn" value="Submit">
                </form>
            </div>
        </div>
        <div class="listings">
            <div class="listings__headers">
                <div class="listings__headers--type">Type</div>
                <div class="listings__headers--note">Note</div>
                <div class="listings__headers--amount">Amount</div>
                <div class="listings__headers--balance">Balance</div>
            </div>
            <?php if($transactions) : ?>
            <?php while($row = $transactions->fetch_assoc()) : ?>
            <form method="post" name="edit" action="index.php?id=<?php echo $row['id'] ?>">
            <div class="listings__job">
                <div class="listings__job--info">
                    <div class="listings__job--info-line1">
                        <div class="listings__job--info-line1-datePosted"><?php echo formatDate($row['transactionDate']); ?></div>
                        <div class="listings__job--info-line1-datePosted">
                            <input name="transactionDate" type="date" value="<?php echo formatDateHTMLInput($row['transactionDate']); ?>" hidden />
                        </div>
                        <div class="listings__job--info-line1-editDelete"> 
                            <div>                          
                                <button name="edit" type="button" class="btn btn__secondary" onClick="startEditSelector(this)">Edit</button>
                                <button name="delete" type="button" class="btn btn__primaryVeryDark" onClick="startEditSelector(this)">Delete</button>
                            </div>
                        </div>
                    </div>
                    <div class="listings__job--info-line2">
                       
                        <div class="btn btn__primary"><?php if($row['transactionType']=="1. Deposit") {echo "Cha-CHING";} elseif($row['transactionType']=="3. Invest") {echo "Invest";} else {echo "Money Out";} ?></div>
                        <div>
                        <select name="transactionType" class="addSearch__form--selectBoxes-item" id="" hidden>                                
                            <?php 
                                //Create and run Type Selector Query
                                $query = "SELECT * FROM transactionType ORDER BY transactionType";
                                $transactionTypes = $db->select($query);
                            ?>
                            <?php while($typeRow = $transactionTypes->fetch_assoc()) : ?>
                            <?php if ($row['transactionType'] === $typeRow['transactionType']) {
                                $selected = 'selected';
                            }else{
                                $selected = "";
                            }
                            ?>
                            <option value="<?php echo $typeRow['transactionType']; ?>" <?php echo $selected; ?>>
                                <?php echo $typeRow['transactionType']; ?>
                            </option>
                            <?php endwhile; ?>
                           
                        </select>
                        </div>
                        <h2><?php echo $row['transactionNote']; ?>
                        </h2>
                        <h2>
                            <input name="transactionNote" value="<?php echo $row['transactionNote']; ?>" hidden />
                        </h2>
                        <div class="listings__job--info-line2Amount"><?php echo $row['transactionAmount']; ?>
                        </div>
                        <div class="listings__job--info-line2Amount">
                            <input name="transactionAmount" value="<?php echo $row['transactionAmount']; ?>" hidden />                        
                        </div>
                        <div>
                            <?php 
                                //create and run sum query for current transaction balance
                                $lineTransactionTime = $row['transactionTime'];
                                $result=$db->select("SELECT SUM(transactionAmount) AS lineValueSum FROM transactions WHERE transactionTime < '$lineTransactionTime';");
                                $sumRow=$result->fetch_assoc();
                                $lineSum=$sumRow['lineValueSum'];
                            ?>
                            <?php echo "$".$lineSum; ?>
                        </div>

                    </div>
                </div>                
            </div>
            </form>
            <br>
            <hr>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
    </div>
     -->