<!DOCTYPE html><html>    <head>        <title>What Goes Well | hazelnutty.com</title>        <?php include $_SERVER['DOCUMENT_ROOT']. '/hazelnutty/modules/head.php'; ?>    </head>    <body>        <div>            <header role="banner">                <div>                    <?php include $_SERVER['DOCUMENT_ROOT']. '/hazelnutty/modules/header.php'; ?>                </div>            </header>            <nav role="navigation">                <div>                    <?php include $_SERVER['DOCUMENT_ROOT']. '/hazelnutty/modules/navigation.php'; ?>                </div>            </nav>            <main role="main">                <div>                    <img src="/hazelnutty/media/images/nutella-fruit-dip_opt.jpg" alt="nutella fruit dip" title="Strawberry dipped into nutella">                    <h2>What Goes Well</h2>                    <h3>What goes well with Nutella:</h3>                    <ul>                        <li>Apples</li>                        <li>Bread</li>                        <li>Graham Crackers</li>                        <li>Bananas</li>                        <li>PBJ</li>                        <li>Ice Cream</li>                        <li>Waffles</li>                        <li>Pancakes</li>                        <li>Strawberries</li>                    </ul>                </div>            </main>            <aside role="complementary">                <div>                    <h4>What does not go well with Nutella:</h4>                    <a href="/hazelnutty/howtouse/whatdoesntgowell.php" title="What Does Not Go Well With Nutella">What does not go well</a>                </div>            </aside>            <footer role="contentinfo">                <div>                    <?php include $_SERVER['DOCUMENT_ROOT']. '/hazelnutty/modules/footer.php'; ?><br>                    <?php echo 'Last updated: ' . date('F d, Y',  getlastmod()) ?>                </div>            </footer>        </div>    </body></html>