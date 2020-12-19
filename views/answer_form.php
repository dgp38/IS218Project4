
<?php
session_start();
include('abstract/header.php'); ?>

<h1> Add New Answer</h1>
<form action ="index.php" method="post">
    <input type="hidden" name="action" value ="submit_answer">
    <input type="hidden" name="userId" value="<?php echo $userId; ?>">

    <div class="form-group">
        <label for="body">Answer: </label>
        <input class="form-control" type=text name="body" id="body">
    </div>

    <div><input type="submit" class="btn btn-primary" value="Submit Answer"></div>
</form>

<?php include('abstract/footer.php'); ?>*/
