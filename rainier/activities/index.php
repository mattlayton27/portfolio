<!DOCTYPE html>
<html>
    <head>
        <title>Guides | rainieradventures.com</title>
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
                <img src="/rainier/media/images/rainier_activities_opt.jpg" alt="Mount Rainier Activities" title="Rainier Forest">
                <h2>Our Activities</h2>
                <p>Because of the ease of access to the mountain, we have various activities for those looking
                for an adventure! If you are a beginner, we have an easy, beautiful hike that you can experience.
                If you are a professional backcountry skier, we have just the place for you at the top of the mountain.
                Our activities are home to anyone on various skill levels from beginner to experienced. Also, if you
                are a beginner and don't yet feel comfortable experiencing these activities without someone who knows
                what they are doing, please take advantage of our activity guides.</p>
            </div>
        </main>
        <aside>
            <div>
                <h3>Our adventures include:</h3>
                <a href="/rainier/activities/mountain_biking.php" title ="Mountain Biking Mount Rainier">Mountain Biking</a>
                <a href="/rainier/activities/hiking.php" title="Hiking Mount Rainier">Hiking</a>
                <a href="/rainier/activities/backcountry_skiing.php" title="Backcountry Skiing/Snowboarding Mount Rainier">Backcountry Skiing/Snowboarding</a>
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
