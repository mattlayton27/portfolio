<!DOCTYPE html>
<html>
    <head>
        <title>Proximity Example | hazelnutty.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/head.php'; ?>
    </head>
    <body>
        <div>
        <header role="banner">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/header.php'; ?>
            </div>
        </header>
        <nav role="navigation">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/navigation.php'; ?>
            </div>
        </nav>
        <main role="main">
            <div>
                <h2>Proximity Example</h2>
                <img src="/media/images/proximity-example_opt.png" alt="Proximity" title="Proximity Example">
            </div>
        </main>
        <aside role="complementary">
            <div>
                
            </div>
        </aside>
        <footer role="contentinfo">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/footer.php'; ?>
                <?php echo 'Last updated: ' . date('F d, Y',  getlastmod()) ?>
            </div>
        </footer>
       </div>
    </body>
</html>
