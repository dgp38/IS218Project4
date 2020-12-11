<?php include('abstract/header.php'); ?>
<a href=".?action=display_question_form&userId=<?php echo $userId; ?>">Add Question</a>

<a href=".?action=display_questions&userId=<?php echo $userId; ?>&listType=mine">My question</a>
<a href=".?action=display_questions&userId=<?php echo $userId; ?>&listType=all">all question</a>
<h1> <?php echo $F_name['fname'] ; ?>&nbsp;<?php echo $F_name['lname']; ?>  </h1>


<table>
    <tr>
        <th>Title</th>
        <th>body</th>
        <th>skill</th>
    </tr>
    <?php foreach ($questions as $question): ?>
        <tr>
            <td><?php echo $question['title']; ?></td>
            <td><?php echo $question['body']; ?></td>
            <td><?php echo $question['skills']; ?>
                <td>
                <form action"." method="post">
                <input type="hidden" name="action" value="delete_question">
                <input type="hidden" name="questionId" value="<?php echo $question['id'];?>">
                <input type="hidden" name="userId" value="<?php echo $userId;?>">

                <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include('abstract/footer.php');  ?>
