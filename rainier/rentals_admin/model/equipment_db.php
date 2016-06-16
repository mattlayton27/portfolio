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

function delete_equipment($equipment_id) {
    global $db;
    $query = 'DELETE FROM equipment
              WHERE equipmentID = :equipment_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':equipment_id', $equipment_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_equipment($activity_id, $equipment_name, $daily_price, $equipment_available) {
    global $db;
    $query = 'INSERT INTO equipment
                 (activityID, equipmentName, dailyPrice, available)
              VALUES
                 (:equipment_id, :equipment_name, :daily_price, :equipment_available)';
    $statement = $db->prepare($query);
    $statement->bindValue(':equipment_id', $activity_id);
    $statement->bindValue(':equipment_name', $equipment_name);
    $statement->bindValue(':daily_price', $daily_price);
    $statement->bindValue(':equipment_available', $equipment_available);
    $statement->execute();
    $statement->closeCursor();
}

function edit_equipment($activity_id, $equipment_id, $equipment_name, $daily_price, $equipment_available) {
    global $db;
    $query = 'UPDATE equipment
              SET activityID = :activity_id, equipmentName = :equipment_name, dailyPrice = :daily_price, available = :equipment_available
              WHERE equipmentID = :equipment_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':activity_id', $activity_id);
    $statement->bindValue(':equipment_id', $equipment_id);
    $statement->bindValue(':equipment_name', $equipment_name);
    $statement->bindValue(':daily_price', $daily_price);
    $statement->bindValue(':equipment_available', $equipment_available);
    $statement->execute();
    $statement->closeCursor();
}
?>