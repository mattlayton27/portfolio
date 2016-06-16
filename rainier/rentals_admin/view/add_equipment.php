<!DOCTYPE html>
<html>
    <head>
        <title>Add Equipment | rainieradventures.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/public/rainier/modules/head.php'; ?>
    </head>
    <body>
        <div>
            <header>
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/public/rainier/modules/header.php'; ?>
                </div>
            </header>
            <nav>
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/public/rainier/modules/navigation.php'; ?>
                </div>
            </nav>
            <main>
                <div class="admin">
                    <h2>Add Equipment</h2>
                    <form action="../controller/index.php" method="post" id="add_equipment_form">
                        <input type="hidden" name="action" value="add_equipment">
                        <?php if (!empty($error)) { ?>
                            <p class="error"><?php echo $error; ?></p>
                        <?php } // end if ?>
                        <label>Activity:</label>
                        <select name="activity_id" id="activity">
                            <?php foreach ($activities as $activity) : ?>
                                <option value="<?php echo $activity['activityID']; ?>"
                                    <?php if (isset($activity_id) && $activity_id == $activity['activityID']){echo 'selected';} ?>>
                                    <?php echo $activity['activityName']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select><br>

                        <label>Name:</label>
                        <input type="text" name="equipment_name" id="equipment_name" 
                               value="<?php if(isset($equipment_name)){echo $equipment_name;}?>" required><br>

                        <label>Daily Price:</label>
                        <input type="text" name="daily_price" id="price" 
                               value="<?php if(isset($daily_price)){echo $daily_price;}?>" required><br>

                        <label>Available:</label>
                        <select name="equipment_available" id="available">
                            <option value="Yes" <?php if (isset($equipment_available) && $equipment_available == 'Yes'){
                                echo 'selected';} ?>>Yes</option>
                            <option value="No" <?php if (isset($equipment_available) && $equipment_available == 'No'){
                                echo 'selected';} ?>>No</option>
                        </select><br>

                        <label>&nbsp;</label>
                        <input type="submit" value="Add equipment" id="add_equipment"><br>
                    </form>
                    <p class="last_paragraph">
                        <a href="index.php?action=list_equipment">View Equipment List</a>
                    </p>
                </div>
            </main>
            <aside>
                <div>
                    <p></p>
                </div>
            </aside>
            <footer>
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/public/rainier/modules/footer.php'; ?><br>
                    <?php echo 'Last updated: ' . date('F d, Y', getlastmod()) ?>
                </div>
            </footer>
        </div>
    </body>
</html>

