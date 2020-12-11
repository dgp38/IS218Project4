<?php include('abstract/header.php'); ?>
<body>
    <form action='index.php' method='post'>
        <h1>Answer the question</h1>
        <textarea name='answer' placeholder='Your answer'></textarea><br>
        <input type="hidden" name="questionId" value="<?php echo $questionId; ?>">
        <input type="hidden" name="action" value="post_answer">
        <input type='submit' class='formButton' value='Post'><br>
    </form>
</body>
<?php include('abstract/footer.php'); ?>