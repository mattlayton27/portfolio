<!DOCTYPE html>
<html>
    <head>
        <title>Backcountry Skiing | rainieradventures.com</title>
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
                <img src="/public/rainier/media/images/rainier_backcountry_skiing_opt.jpg" alt="Rainier Skiing" title="Rainier Backcountry Skiing">
                <h2>Backcountry Skiing/Snowboarding</h2>
                <p>When backcountry skiing or snowboarding Mount Rainier, you will experience beauty at the tip
                of the mountain, and will experience adrenaline like you have never felt before.</p>
                <h2>Packages</h2>
                <ul>
                    <li>Beginner
                        <ul>
                            <li>Length: 4-6 hours</li>
                            <li>Cost: $299</li>
                            <li>You will be introduced to the basics of backcountry skiing/snowboarding Mount Rainier
                            and will hike 1/4 of the way up the mountain and ski/snowboard back down.</li>
                            <li>Includes a small tutorial of backcountry skiing/snowboarding from guide.</li>
                        </ul>
                    </li>
                    <li>Intermediate
                        <ul>
                            <li>Length: 6-8 hours</li>
                            <li>Cost: $399</li>
                            <li>You will be hiking halfway up the mountain and skiing/snowboarding down from there.</li>
                        </ul>
                    </li>
                    <li>Advanced
                        <ul>
                            <li>Length: 36-48 hours</li>
                            <li>Cost: $799</li>
                            <li>You will be hiking from the base of the mountain to the very top. It is a two day hike
                            so you will need to camp for a night.</li>
                            <li>Includes a tent.</li>
                        </ul>
                    </li>
                </ul>
                <a href="../rentals/controller/index.php?action=list_equipment&amp;activity_id=3">Rentals Available</a>
            </div>
        </main>
        <aside>
            <div>
                <h3>Backcountry Skiing/Snowboarding Guide:</h3>
                <a href="/public/rainier/guides/backcountry_skiing_guide.php" title="Ski Guide Matt Layton">Matt Layton</a>
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



