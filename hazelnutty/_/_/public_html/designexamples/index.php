<!DOCTYPE html>
<html>
    <head>
        <title>Design Examples | hazelnutty.com</title>
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
                <h2>Design Examples:</h2>
                <ul>
                    <li><a href="/designexamples/alignment_example.php" title="Alignment Example">Alignment Example</a></li>
                    <li><a href="/designexamples/contrast_example.php" title="Contrast Example">Contrast Example</a></li>
                    <li><a href="/designexamples/proximity_example.php" title="Proximity Example">Proximity Example</a></li>
                    <li><a href="/designexamples/repetition_example.php" title="Repetition Example">Repetition Example</a></li>
                    <li><a href="/designexamples/typography_example.php" title="Typography Example">Typography Example</a></li>
                </ul>
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

