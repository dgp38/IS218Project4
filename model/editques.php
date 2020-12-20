<?php
class editquesDB
{
    function editQuestion($questionId, $title, $body, $skills)
    {
        global $db;

        $query = "UPDATE questions SET title = :title, body = :body, skills = :skills WHERE id = :questionId";
        $statement = $db->prepare($query);
        $statement->bindValue(":title", $title);
        $statement->bindValue(":body", $body);
        $statement->bindValue(":skills", $skills);
        $statement->bindValue(":questionId", $questionId);
        $statement->execute();
        $statement->closeCursor();
    }
}