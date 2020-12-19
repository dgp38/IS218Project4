<?php
session_start();
include('abstract/header.php'); ?>

<h1> Edit Question</h1>
<form action ="index.php" method="post">
    <input type="hidden" name="userId" value="<?php echo $userId; ?>">

    <div>Question Name:
        <input type ="text" name ="name"></div>

    <div>Question Body:
        <textarea  name ="body"></textarea>
    </div>

    <div>Question Skills:
        <input type ="text" name ="skills"></div>

    <div><input type="submit" class="btn btn-primary" value="Update Question"></div>
</form>

<?php include('abstract/footer.php'); ?>
