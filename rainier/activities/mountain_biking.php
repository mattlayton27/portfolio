<!DOCTYPE html>
<html>
    <head>
        <title>Mountain Biking | rainieradventures.com</title>
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
                <img src="/public/rainier/media/images/rainier_mountainbiking_opt.jpg" alt="Mountain Biking" title="Rainier Mountain Biking">
                <h2>Mountain Biking</h2>
                <p>If you want some exercise, your adrenaline pumping, or just want to feel the breeze in your hair
                while rushing down the mountain on your mountain bike, Mount Rainier is just the place for that!</p>
                <h2>Packages</h2>
                <ul>
                    <li>Beginner
                        <ul>
                            <li>Length: 2-3 hours</li>
                            <li>Cost: $30</li>
                            <li>On this trail you will make a loop around the lake, and it will consist of very little
                            hills to climb.</li>
                        </ul>
                    </li>
                    <li>Intermediate
                        <ul>
                            <li>Length: 4-5 hours</li>
                            <li>Cost: $50</li>
                            <li>This trail offers a various amount of hills alongside the base of the mountain, but will
                            not include our advanced trails.</li>
                        </ul>
                    </li>
                    <li>Advanced
                        <ul>
                            <li>Length: 6-7 hours</li>
                            <li>Cost: $70</li>
                            <li>This is one of the most challenging mountain biking trails on the west coast. Be prepared
                            to test your limits!</li>
                        </ul>
                    </li>
                </ul>
                <a href="../rentals/controller/index.php?action=list_equipment&amp;activity_id=1">Rentals Available</a>
            </div>
        </main>
        <aside>
            <div>
                <h3>Mountain Biking Guide:</h3>
                <a href="/public/rainier/guides/mountain_biking_guide.php" title="Mountain Biking Guide Ryan Layton">Ryan Layton</a>
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

