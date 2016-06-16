<!DOCTYPE html>
<html>
    <head>
        <title>Hiking | rainieradventures.com</title>
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
                <img src="/rainier/media/images/rainier_hiking_opt.jpg" alt="Rainier Hiking" title="Hiking Mount Rainier">
                <h2>Hiking</h2>
                <p>During the summer we have the most breathtaking views on our hiking activities. Our hikes vary from
                a small hike in the park, to a hike to the very top of the mountain.</p>
                <h2>Packages</h2>
                <ul>
                    <li>Beginner
                        <ul>
                            <li>Length: 1-2 hours</li>
                            <li>Cost: $10 per person</li>
                            <li>On this hike you will hike to the base of the mountain, and will be able to see the
                            mind blowing view of the mountain.</li>
                        </ul>
                    </li>
                    <li>Intermediate
                        <ul>
                            <li>Length: 3-4 hours</li>
                            <li>Cost: $15 per person</li>
                            <li>You will be hiking to before the mountains starts to get steep, and look out on the forest
                            surrounding the mountain.</li>
                        </ul>
                    </li>
                    <li>Advanced
                        <ul>
                            <li>Length: 36-48 hours</li>
                            <li>Cost: $299</li>
                            <li>You will be hiking from the base of the mountain to the very top. It is a two day hike
                            so you will need to camp for a night.</li>
                            <li>Includes a tent.</li>
                        </ul>
                    </li>
                </ul>
                <p>Water will be available every mile for the beginner and intermediate levels. If you need first aid
                    please call: (555)555-5555</p>
                <a href="../rentals/controller/index.php?action=list_equipment&amp;activity_id=2">Rentals Available</a>
            </div>
        </main>
        <aside>
            <div>
                <h3>Hiking Guide:</h3>
                <a href="/rainier/guides/hiking_guide.php" title="Hiking Guide Jake Rammell">Jake Rammell</a>
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
