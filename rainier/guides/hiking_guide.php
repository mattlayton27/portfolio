<!DOCTYPE html>
<html>
    <head>
        <title>Hiking Guide | rainieradventures.com</title>
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
                <img src="/public/rainier/media/images/rainier_hiking_guide_opt.jpg" alt="Hiking Guide" title="Jake Rammell">
                <h2>Jake Rammell | Hiking Guide</h2>
                    <h3>Bio:</h3> 
                        <p>Jake is a natural born hiker. He has hiked to the top of Mount Everest three times and has
                        hiked to the top of Mount Rainier almost 100 times! He knows every piece of this mountain and if
                        you ever get lost, no worries. He will find you! If you have the chance of taking Jake as a
                        guide, be prepared to know every little bit of the history of Mount Rainier!</p>
                    <h3>Guide certification level:</h3> 
                        <p>Hiking Guide Cert Level IV</p>
                    <h3>Years experience:</h3> 
                        <p>20 years</p>
                    <h3>Email address:</h3> 
                        <p>jrammellisahiker@gmail.com</p>
            </div>
        </main>
        <aside>
            <div>
                <h3>Packages:</h3>
                <a href="/public/rainier/activities/hiking.php" title="Hiking Mount Rainier">Hiking Activity</a>
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

