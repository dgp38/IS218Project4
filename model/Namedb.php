<?php
class nameDB
{
    public static function getName($userId)
    {
        global $db;

        $query = "SELECT fname, lname FROM accounts WHERE id = :userId";
        $statement = $db->prepare($query);
        $statement->bindValue(':userId', $userId);
        $statement->execute();
        $account = $statement->fetch();
        $statement->closeCursor();

        return $account;
    }
}