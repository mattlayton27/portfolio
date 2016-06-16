<?php

require '../../modules/databases.php';
$db = rentalsdb();
require('../model/equipment_db.php');
require('../model/activities_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_equipment';
    }
}

if ($action == 'list_equipment') {
    $activity_id = filter_input(INPUT_GET, 'activity_id', FILTER_VALIDATE_INT);
    if ($activity_id == NULL || $activity_id == FALSE) {
        $activity_id = 1;
    }
    $activities = get_activities();
    $activity_name = get_activity_name($activity_id);
    $equipment = get_equipment_by_activity($activity_id);
    include('../view/list_equipment.php');
}
?>
