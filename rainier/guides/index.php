<!DOCTYPE html>
<html>
    <head>
        <title>Guides | rainieradventures.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT']. '/public/rainier/modules/head.php'; ?>
    </head>
    <body>
        <div>
        <header>
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/public/rainier/modules/header.php'; ?>
            </div>
        </header>
        <nav>
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/public/rainier/modules/navigation.php'; ?>
            </div>
        </nav>
        <main>
            <div>
                <img src="/public/rainier/media/images/rainier_guides_opt.jpg" alt="#" title="#">
                <h2>Our Guides</h2>
                <p>Our guides are very experienced when it comes to teaching you the basics of the activities
                he have, or to showing you all their secret spots on the mountain (may cost extra). Please, if
                you choose to experience our advanced adventures, we ask that you bring one of our guides. They
                can be very dangerous and our experienced guides will help you along the way.</p>
            </div>
        </main>
        <aside>
            <div>
                <h3>Guides:</h3>
                <a href="/public/rainier/guides/mountain_biking_guide.php" title="Mountain Biking Guide Ryan Layton">Ryan Layton</a>
                <a href="/public/rainier/guides/hiking_guide.php" title="Hiking Guide Jake Rammell">Jake Rammell</a>
                <a href="/public/rainier/guides/backcountry_skiing_guide.php" title="Skiing Guide Matt Layton">Matt Layton</a>
            </div>
        </aside>
        <footer>
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/public/rainier/modules/footer.php'; ?><br>
                <?php echo 'Last updated: ' . date('F d, Y',  getlastmod()) ?>
            </div>
        </footer>
       </div>
    </body>
</html>

