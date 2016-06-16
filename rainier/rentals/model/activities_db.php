<?php
function get_activities() {
    global $db;
    $query = 'SELECT * FROM activities
              ORDER BY activityID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

function get_activity_name($activity_id) {
    global $db;
    $query = 'SELECT * FROM activities
              WHERE activityID = :activity_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':activity_id', $activity_id);
    $statement->execute();    
    $activity = $statement->fetch();
    $statement->closeCursor();    
    $activity_name = $activity['activityName'];
    return $activity_name;
}

?>