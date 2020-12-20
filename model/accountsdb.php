<?php

class AccountsDB
{
    public static function validate_login($email, $password)
    {
        global $db;
        $query = 'SELECT * FROM accounts WHERE email = :email AND password = :password';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $user = $statement->fetch();
        $statement->closeCursor();

        if (count($user) > 0) {
            $user = new Account($user['id'], $user['email'], $user['fname'], $user['lname'], $user['phoneNumber'], $user['birthday'], $user['password']);
            return $user;
        } else {
            return false;
        }
    }

    public static function getuser($userId)
    {
        global $db;
        $query = 'SELECT * FROM account WHERE id = :userId';
        $statement = $db->prepare($query);
        $statement->bindValue(':userId', $userId);
        $statement->execute();
        $userid = $statement->fetch();
        $statement->closeCursor();
        return $userid;
    }
}


/* function validatelogin($email, $password) {
    global $db;
    $query = 'SELECT * FROM accounts WHERE email = :email AND password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();

    if (count($user) > 0) {
        return $user['id'];
    } else {
        return false;
    }
}*/

