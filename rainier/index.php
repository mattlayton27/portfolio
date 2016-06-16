<!DOCTYPE html>
<html>
    <head>
        <title>Home | rainieradventures.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT']. '/public/portfolio/rainier/modules/head.php'; ?>
    </head>
    <body>
        <div>
        <header>
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/public/portfolio/rainier/modules/header.php'; ?>
            </div>
        </header>
        <nav>
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/public/portfolio/rainier/modules/navigation.php'; ?>
            </div>
        </nav>
        <main>
            <div>
                <img src="/public/portfolio/rainier/media/images/rainier_home_opt.jpg" alt="Image of Mount Rainier" title="Mount Rainier">
                <h2>Welcome to Mount Rainier!</h2>
                <p>Mount Rainier has the highest peak in the Cascade mountains, the highest mountain in Washington
                   and also in the Pacific Northwest. It is stands at 14,411 ft tall and is also a large active
                   stratovolcano. But don't worry, it's not going to blow anytime soon! It is a very popular spot
                   for those who want to experience adventure from a beautiful easy hike, to an adrenaline pumping
                   backcountry ski trip.</p>
                <p>Our adventures consist of mountain biking, hiking, and backcountry skiing for those looking to
                   experience this wonderful mountain! Also, take advantage of our activity guides if you want to
                   experience this mountain with a professional who knows every little bit about this great place.</p>
            </div>
        </main>
        <aside>
            <div>
                <p></p>
            </div>
        </aside>
        <footer>
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/public/portfolio/rainier/modules/footer.php'; ?><br>
                <?php echo 'Last updated: ' . date('F d, Y',  getlastmod()) ?>
            </div>
        </footer>
       </div>
    </body>
</html>
