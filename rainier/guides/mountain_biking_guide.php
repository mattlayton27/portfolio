<!DOCTYPE html>
<html>
    <head>
        <title>Mountain Biking Guide | rainieradventures.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT']. '/rainier/modules/head.php'; ?>
    </head>
    <body>
        <div>
        <header>
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/rainier/modules/header.php'; ?>
            </div>
        </header>
        <nav>
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/rainier/modules/navigation.php'; ?>
            </div>
        </nav>
        <main>
            <div>
                <img src="/rainier/media/images/rainier_mountainbiking_guide_opt.jpg" alt="Mountain Biking Guide" title="Ryan Layton">
                <h2>Ryan Layton | Mountain Biking Guide</h2>
                    <h3>Bio:</h3>
                        <p>Ryan is a straight adrenaline junkie. He loves anything that will pump that adrenaline in him.
                        He has been a professional mountain biker for almost 7 years and has won various competitions all
                        over the world. He grew up around Mount Rainier and has biked the advanced trail more times that he
                        can count. If you have the chance of having Ryan as a guide, he will also teach you skills necessary
                        to conquer this mountain!</p>
                    <h3>Guide certification level:</h3>
                        <p>Mountain Bike Guide Level II</p>
                    <h3>Years experience:</h3>
                        <p>3 years</p>
                    <h3>Email address:</h3>
                        <p>ryantheman@gmail.com</p>
            </div>
        </main>
        <aside>
            <div>
                <h3>Packages:</h3>
                <a href="/rainier/activities/mountain_biking.php" title="Mountain Biking Mount Rainier">Mountain Biking Activity</a>
            </div>
        </aside>
        <footer>
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/rainier/modules/footer.php'; ?><br>
                <?php echo 'Last updated: ' . date('F d, Y',  getlastmod()) ?>
            </div>
        </footer>
       </div>
    </body>
</html>
