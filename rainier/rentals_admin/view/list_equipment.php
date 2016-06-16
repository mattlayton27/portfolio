<!DOCTYPE html>
<html>
    <head>
        <title>Equipment List | rainieradventures.com</title>
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
                    <h2>Equipment Rental Administration</h2>
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
                    <h3><?php echo $activity_name; ?></h3>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Daily Price</th>
                            <th>Available</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                        <?php foreach ($equipment as $equip) : ?>
                            <tr>
                                <td><?php echo $equip['equipmentName']; ?></td>
                                <td><?php echo $equip['dailyPrice']; ?></td>
                                <td><?php echo $equip['available']; ?></td>
                                <td class="deleteedit">
                                    <form action="../controller/index.php" method="post">
                                        <input type="hidden" name="action" value="delete_equipment">
                                        <input type="hidden" name="equipment_id" value="<?php echo $equip['equipmentID']; ?>">
                                        <input type="hidden" name="activity_id" value="<?php echo $equip['activityID']; ?>">
                                        <input type="submit" value="Delete">
                                    </form>
                                </td>
                                <td class="deleteedit">
                                    <form action="../controller/index.php" method="post">
                                        <input type="hidden" name="action" value="edit_equipment_page">
                                        <input type="hidden" name="equipment_id" value="<?php echo $equip['equipmentID']; ?>">
                                        <input type="hidden" name="activity_id" value="<?php echo $equip['activityID']; ?>">
                                        <input type="hidden" name="equipment_name" value="<?php echo $equip['equipmentName']; ?>">
                                        <input type="hidden" name="daily_price" value="<?php echo $equip['dailyPrice']; ?>">
                                        <input type="hidden" name="equipment_available" value="<?php echo $equip['available']; ?>">
                                        <input type="submit" value="Edit">
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <form action="../controller/index.php" method="post" id="add_form">
                        <input type="hidden" name="action" value="add_equipment_page">
                        <input type="hidden" name="activity_id" value="<?php echo $activity_id;?>">
                        <input type="submit" value="Add Equipment">
                    </form>
                        </div>
                    </div>
                </div>
            </main>
            <aside>
                <div>
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
