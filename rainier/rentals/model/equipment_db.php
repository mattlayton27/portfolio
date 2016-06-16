<?php
function get_equipment_by_activity($activity_id) {
    global $db;
    $query = 'SELECT * FROM equipment
              WHERE equipment.activityID = :activity_id
              ORDER BY equipmentID';
    $statement = $db->prepare($query);
    $statement->bindValue(":activity_id", $activity_id);
    $statement->execute();
    $equipment = $statement->fetchAll();
    $statement->closeCursor();
    return $equipment;
}

function get_equipment($equipment_id) {
    global $db;
    $query = 'SELECT * FROM equipment
              WHERE productID = :equipment_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":equipment_id", $equipment_id);
    $statement->execute();
    $equipment = $statement->fetch();
    $statement->closeCursor();
    return $equipment;
}