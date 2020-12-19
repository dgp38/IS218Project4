<?php
session_start();
include('abstract/header.php'); ?>
<a class="col" href=".?action=display_question_form&userId=<?php echo $userId; ?>">Add Question</a>
<a class="col" href=".?action=display_questions&userId=<?php echo $userId; ?>&listType=mine">My question</a>
<a class="col" href=".?action=display_questions&userId=<?php echo $userId; ?>&listType=all">All question</a>
<a class="col" href=".?action=display_answer&userId=<?php echo $userId; ?>&listanswer=all">All Answer</a>
<h1> <?php echo $F_name['fname'] ; ?>&nbsp;<?php echo $F_name['lname']; ?>  </h1>


<table class="table">
    <tr>
        <th>Title</th>
        <th>body</th>
        <th>skill</th>
        <th>answer</th>

    </tr>
    <?php foreach ($questions as $question): ?>
        <tr>
            <td><?php echo $question['title']; ?></td>
            <td><?php echo $question['body']; ?></td>
            <td><?php echo $question['skills']; ?></td>
            <td><?php echo $question['answer']; ?></td>
                <td>
                <form action"." method="post">
                <input type="hidden" name="action" value="delete_question">
                <input type="hidden" name="questionId" value="<?php echo $question['id'];?>">
                <input type="hidden" name="userId" value="<?php echo $userId;?>">

                <input  type="submit" value="Delete">
                </form>

                <form action"." method="post">
                <input type="hidden" name="action" value="single_question">
                <input type="hidden" name="questionId" value="<?php echo $question['id'];?>">
                <input type="hidden" name="userId" value="<?php echo $userId;?>">

                <input type="submit" value="Views">
                </form>

                <form action"." method="post">
                <input type="hidden" name="action" value="submit_answer">
                <input type="hidden" name="questionId" value="<?php echo $question['id'];?>">
                <input type="hidden" name="userId" value="<?php echo $userId;?>">

                <input type="submit" value="New Answer">
                </form>



            </td>
        </tr>
    <?php endforeach; ?>
</table>


<?php include('abstract/footer.php');  ?>
