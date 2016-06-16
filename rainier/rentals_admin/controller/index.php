<?php

// link to required pages
require '../../modules/databases.php';
$db = rentalsdb();
require '../model/activities_db.php';
require '../model/equipment_db.php';

// get action and set default action
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_equipment';
    }
}

// use switch statement to control where everything goes
switch ($action) {
    case 'list_equipment':
        $activity_id = filter_input(INPUT_GET, 'activity_id', FILTER_VALIDATE_INT);
        if ($activity_id == NULL || $activity_id == FALSE) {
            $activity_id = 1;
        }
        $activity_name = get_activity_name($activity_id);
        $activities = get_activities();
        $equipment = get_equipment_by_activity($activity_id);
        include '../view/list_equipment.php';
        break;
    case 'delete_equipment':
        $activity_id = filter_input(INPUT_POST, 'activity_id', FILTER_VALIDATE_INT);
        $equipment_id = filter_input(INPUT_POST, 'equipment_id', FILTER_VALIDATE_INT);
        if ($equipment_id == NULL || $equipment_id == FALSE || $activity_id == NULL || $activity_id == FALSE) {
            $error = "Missing or incorrect equipment id or activity id";
            $activity_name = get_activity_name($activity_id);
            $activities = get_activities();
            $equipment = get_equipment_by_activity($activity_id);
            include '../view/list_equipment.php';
        } else {
            delete_equipment($equipment_id);
            header("Location: .?activity_id=$activity_id");
        }
        break;
    case 'add_equipment_page':
        $activity_id = filter_input(INPUT_POST, 'activity_id', FILTER_VALIDATE_INT);
        if ($activity_id == NULL || $activity_id == FALSE) {
            $error = "Invalid activity id";
            $activity_name = get_activity_name($activity_id);
            $activities = get_activities();
            $equipment = get_equipment_by_activity($activity_id);
            include 'list_equipment.php';
        } else {
            $activities = get_activities();
            include '../view/add_equipment.php';
        }
        break;
    case 'add_equipment':
        $activity_id = filter_input(INPUT_POST, 'activity_id', FILTER_VALIDATE_INT);
        $equipment_name = filter_input(INPUT_POST, 'equipment_name');
        $daily_price = filter_input(INPUT_POST, 'daily_price', FILTER_VALIDATE_FLOAT);
        $equipment_available = filter_input(INPUT_POST, 'equipment_available');
        if ($activity_id == NULL || $activity_id == FALSE || $equipment_name == NULL ||
                $daily_price == NULL || $daily_price == FALSE || $equipment_available == NULL) {
            $error = "Invalid equipment data";
            $activities = get_activities();
            include '../view/add_equipment.php';
        } else {
            add_equipment($activity_id, $equipment_name, $daily_price, $equipment_available);
            header("Location: .?activity_id=$activity_id");
        }
        break;
    case 'edit_equipment_page':
        $activity_id = filter_input(INPUT_POST, 'activity_id', FILTER_VALIDATE_INT);
        $equipment_id = filter_input(INPUT_POST, 'equipment_id', FILTER_VALIDATE_INT);
        $equipment_name = filter_input(INPUT_POST, 'equipment_name');
        $daily_price = filter_input(INPUT_POST, 'daily_price', FILTER_VALIDATE_FLOAT);
        $equipment_available = filter_input(INPUT_POST, 'equipment_available');
        if ($activity_id == NULL || $activity_id == FALSE || $equipment_id == NULL || $equipment_id == FALSE||
                $equipment_name == NULL || $daily_price == NULL || $daily_price == FALSE ||
                $equipment_available == NULL) {
            $error = "Invalid equipment data";
            $activity_name = get_activity_name($activity_id);
            $activities = get_activities();
            $equipment = get_equipment_by_activity($activity_id);
            include '../view/list_equipment.php';
        } else {
            $activities = get_activities();
            include '../view/edit_equipment.php';
        }
        break;
    case 'edit_equipment':
        $activity_id = filter_input(INPUT_POST, 'activity_id', FILTER_VALIDATE_INT);
        $equipment_id = filter_input(INPUT_POST, 'equipment_id', FILTER_VALIDATE_INT);
        $equipment_name = filter_input(INPUT_POST, 'equipment_name');
        $daily_price = filter_input(INPUT_POST, 'daily_price', FILTER_VALIDATE_FLOAT);
        $equipment_available = filter_input(INPUT_POST, 'equipment_available');
        if ($activity_id == NULL || $activity_id == FALSE || $equipment_id == NULL || $equipment_id == FALSE||
                $equipment_name == NULL || $daily_price == NULL || $daily_price == FALSE ||
                $equipment_available == NULL) {
            $error = "Invalid equipment data";
            $activities = get_activities();
            include '../view/edit_equipment.php';
        } else {
            edit_equipment($activity_id, $equipment_id, $equipment_name, $daily_price, $equipment_available);
            header("Location: .?activity_id=$activity_id");
        }
        break;
}
?>
