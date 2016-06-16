<!DOCTYPE html>
<html>
    <head>
        <title>Recipes | hazelnutty.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT']. '/hazelnutty/modules/head.php'; ?>
    </head>
    <body>
        <div>
            <header role="banner">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT']. '/hazelnutty/modules/header.php'; ?>
                </div>
            </header>
            <nav role="navigation">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT']. '/hazelnutty/modules/navigation.php'; ?>
                </div>
            </nav>
            <main role="main">
                <div>
                    <img src="/hazelnutty/media/images/nutella1_opt.jpg" alt="Nutella" title="Nutella">
                    <h2>Recipes Used With Nutella</h2>
                    <h3>My Favorite Nutella Recipe's</h3>
                    <ul>
                        <li><a href="http://www.chef-in-training.com/2012/08/nutella-banana-cookies/" title="Nutella Banana Cookies">Nutella Banana Cookies</a></li>
                        <li><a href="http://www.ohnuts.com/blog/homemade-nutella-recipe/" title="Homemade Nutella">Homemade Nutella</a></li>
                        <li><a href="http://savorysweetlife.com/2010/08/4-ingredients-nutella-brownies/" title="4 Ingredients Nutella Brownies">4 Ingredients Nutella Brownies</a></li>
                        <li><a href="http://www.kidspot.com.au/best-recipes/Nutella-recipes+149/Nutella-popsicles-recipe+4611.htm" title="Nutella Popsicles">Nutella Popsicles</a></li>
                        <li><a href="http://www.food.com/recipe/nutella-stuffed-french-toast-78305" title="Nutella Stuffed French Toast">Nutella Stuffed French Toast</a></li>
                    </ul>
                </div>
            </main>
            <aside role="complementary">
                <div>
                    <h4>Audio Step Through:</h4>
                    <a href="/hazelnutty/recipes/recipe1.php" title="Nutella Banana Cookies">Nutella Banana Cookies</a>
                    <h4>Video Step Through:</h4>
                    <a href="/hazelnutty/recipes/recipe2.php" title="4 Ingredients Nutella Brownies">4 Ingredients Nutella Brownies</a>
                </div>
            </aside>
            <footer role="contentinfo">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT']. '/hazelnutty/modules/footer.php'; ?><br>
                    <?php echo 'Last updated: ' . date('F d, Y',  getlastmod()) ?>
                </div>
            </footer>
        </div>
    </body>
</html>
