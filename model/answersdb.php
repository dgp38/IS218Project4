<?php
class voteDB {
    public static function upVote($answerId, $score) {
        global $db;

        $query = "UPDATE answers SET score = :score WHERE id = :answerId";
        $statement = $db->prepare($query);
        $statement->bindValue(":score", $score);
        $statement->bindValue(":answerId", $answerId);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function downVote($answerId, $score) {
        global $db;

        $query = "UPDATE answers SET score = :score WHERE id = :answerId";
        $statement = $db->prepare($query);
        $statement->bindValue(":score", $score);
        $statement->bindValue(":answerId", $answerId);
        $statement->execute();
        $statement->closeCursor();
    }
}