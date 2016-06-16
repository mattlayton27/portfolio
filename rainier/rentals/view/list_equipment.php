<!DOCTYPE html>
<html>
    <head>
        <title>List Equipment | rainieradventures.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/modules/head.php'; ?>
    </head>
    <body>
        <div>
            <header>
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/modules/header.php'; ?>
                </div>
            </header>
            <nav>
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/modules/navigation.php'; ?>
                </div>
            </nav>
            <main>
                <div class="admin">
                    <h2>Equipment Rental</h2>
                    <div class="column">
                        <div class="columns">
                    <?php if (!empty($error)) { ?>
                        <p class="error"><?php echo $error; ?></p>
                    <?php } // end if ?>
                    <h3>Activities</h3>
                    <ul>
                        <?php foreach ($activities as $activity) : ?>
                            <li>
                                <a href="?activity_id=<?php echo $activity['activityID']; ?>">
                                    <?php echo $activity['activityName']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                        </div>
                        <div class="columns">
                    <div class="special">
                    <h3><?php echo $activity_name; ?></h3>
                    <div class="rowwrap">
                    <?php foreach ($equipment as $rental) : ?>
                    <ul>
                        <li>
                            <img src="<?php echo '/rainier/media/images/' . strtolower(str_replace(" ", "_", $rental['equipmentName'])) . '_opt.jpg'; ?>"
                                 alt="<?php echo 'Image: ' . $rental['equipmentName']; ?>"
                                 title="<?php echo $rental['equipmentName']; ?>">
                        </li>
                        <li><b>Equipment Name: </b><?php echo $rental['equipmentName']; ?></li>
                        <li><b>Daily Price: </b><?php echo $rental['dailyPrice']; ?></li>
                        <li><b>Available: </b><?php echo $rental['available']; ?></li>
                    </ul>
                    <?php endforeach; ?>
                    </div>
                    </div>
                        </div>
                    </div>

                </div>
            </main>
            <aside>
                <div>
                    <p></p>
                </div>
            </aside>
            <footer>
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/modules/footer.php'; ?><br>
                    <?php echo 'Last updated: ' . date('F d, Y', getlastmod()) ?>
                </div>
            </footer>
        </div>
    </body>
</html>
