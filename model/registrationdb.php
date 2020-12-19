<?php
class RegisterDB
{
    public static function create_account($email, $firstname, $lastname, $birthday, $password)
    {
        global $db;
        $query = 'INSERT INTO accounts 
                (email,fname, lname,birthday,password)
                VALUES
                    (:email,:fname,:lname,:birthday,:password)';
        $statement = $db->prepare($query);
        $statement->bindvalue(':email', $email);
        $statement->bindvalue(':fname', $firstname);
        $statement->bindvalue(':lname', $lastname);
        $statement->bindvalue(':birthday', $birthday);
        $statement->bindvalue(':password', $password);
        $statement->execute();
        $statement->closeCursor();

        return $db->lastInsertId();
    }
}