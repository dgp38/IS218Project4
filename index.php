<?php
require('model/data_db.php');
require ('model/account.php');
require('model/accountsdb.php');
require ('model/answers.php');
require ('model/answersdb.php');
require ('model/question.php');
require('model/questionsdb.php');
require ('model/registrationdb.php');
require ('model/Namedb.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'show_login';
    }
}

switch ($action) {
    case 'show_login':
    {
        include('views/login_form.php');
        break;
    }
    case 'validate_login':
    {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $email_id = strpos($email, '@');
        //$passid = strlen($password);
        if ($email == NULL || $email_id == false || $password == NULL) {
            $error = 'Email and Password not include';
            include('error_page/errorcheck.php');
        } else {
            $user = AccountsDB::validate_login($email, $password);
            $userId = $user->getId();
            if ($userId == false) {
                //$error = 'Invalid Login';
                //include('error_page/errorcheck.php');
                header('Location: .?action=display_registration');
            } else {
                //echo 'valid login';
                header("Location: .?action=display_questions&userId=$userId");
            }
        }
        break;
    }
    case 'display_registration':
    {
        include('views/registrationform.php');
        break;
    }
    case 'submit_registration':
    {
        $firstname = filter_input(INPUT_POST, 'fname');
        $lastname = filter_input(INPUT_POST, 'lname');
        $birthday = filter_input(INPUT_POST, 'birthday');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $email_id = strpos($email, '@');
        if ($firstname == NULL || $lastname == NULL || $birthday == NULL || $email == NULL || $email_id == false || $password == NULL) {
            $error = 'First_Name or Last_Name or Date_Of_Birth or Email or Password not include';
            include('error_page/errorcheck.php');

        } else {
            $userId = AccountsDB:: create_account($email, $firstname, $lastname, $birthday, $password);
            header("Location: .?action=display_questions&userId=$userId");
        }
        break;
    }


    case 'display_questions':
    {
        $userId = filter_input(INPUT_GET, 'userId');
        $listType = filter_input(INPUT_GET, 'listType');
        if ($userId == NULL || $userId < 0) {
            header('Location: .?action=show_login');
        } else {
            $F_name = getName($userId);
            $questions = ($listType === 'all') ?
                questionDB::get_all_question() : questionDB::get_users_questions($userId);
            include('views/displayquestion.php');
        }
        break;
    }
    case 'display_question_form':
    {
        $userId = filter_input(INPUT_GET, 'userId');
        if ($userId == NULL || $userId < 0) {
            header('Location: .?action=display_login');
        } else {
            include('views/question.php');

        }
        break;
    }

    case 'submit_question':
    {
        $userId = filter_input(INPUT_POST, 'userId');
        $title = filter_input(INPUT_POST, 'name');
        $body = filter_input(INPUT_POST, 'body');
        $skills = filter_input(INPUT_POST, 'skills');
        $name_len = strlen($title);
        $body_len = strlen($body);
        $sk = explode(",", $skills);
        $words = count($sk);
        if ($userId == NULL || $title == NULL || $body == NULL || $skills == NULL || $name_len < 4 || $body_len > 500 || $words < 2) {
            $error = 'All Field are required';
            include('error_page/errorcheck.php');
        } else {
            questionDB::create_question($title, $body, $skills, $userId);
            header("Location: .?action=display_questions&userId=$userId");
        }
        print_r($sk);

        break;
    }
    case 'delete_question':
    {
        $questionId = filter_input(INPUT_POST, 'questionId');
        $userId = filter_input(INPUT_POST, 'userId');
        if ($questionId == NULL || $userId == NULL) {
            $error = 'All Fields are required';
            include('error_page/errorcheck.php');
        } else {
            questionDB::delete_question($questionId);
            header("Location: .?action=display_questions&userId=$userId");

        }
    }
    case 'display_answer':
    {
        $questionId = filter_input(INPUT_POST, 'questionId');
        include('views/answer_form.php');
    }

    case 'submit_answer':
        {
            $questionId = filter_input(INPUT_POST, 'questionId');
            $answer = filter_input(INPUT_POST, 'answer');
            questionDB::newAnswer($answer, $questionId);
            header("Location: ?action=display_questions");
        }

    case 'logout':
        {
        session_destroy();
        include('views/login_Form.php');
    }

    default: {
        $error = 'Unknown Action';
        include('error_page/errorcheck.php');
        }

}

