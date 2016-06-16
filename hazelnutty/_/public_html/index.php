<!DOCTYPE html>
<html>
    <head>
        <title>Home | hazelnutty.com</title>
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
                <img src="media/images/index_picture_opt.jpg" alt="Picture of nutella on bread" title="Nutella On Bread">
                <p>Do you love Nutella? Well I am here to help all you Nutella lovers out there find many more ways to feast their obsession. Many ask what other things go great with Nutella other than bread. Well I am here to show you the many uses for this heavenly hazelnut spread. </p>
            </div>
        </main>
        <aside role="complementary">
            <div>
                
            </div>
        </aside>
        <footer role="contentinfo">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/footer.php'; ?><br>
                <?php echo 'Last updated: ' . date('F d, Y',  getlastmod()) ?>
            </div>
        </footer>
       </div>
    </body>
</html>