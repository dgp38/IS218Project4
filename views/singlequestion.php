<?php include('abstract/header.php'); ?>
<a class="col" href=".?action=display_answer&userId=<?php echo $userId; ?>&listanswer=all">All Answer</a>
<h1> <?php echo $F_name['fname'] ; ?>&nbsp;<?php echo $F_name['lname']; ?>  </h1>
<h3> Question Detail:</h3>
    <table class="table">
        <tr>
            <th>Title</th>
            <th>body</th>
            <th>skill</th>
            <th>amswer</th>
        </tr>
        <?php foreach ($questions as $question): ?>
            <tr>
                <td><?php echo $question['title']; ?></td>
                <td><?php echo $question['body']; ?></td>
                <td><?php echo $question['skills']; ?></td>
                <td><?php echo $question['answer']; ?></td>

            </tr>
        <?php endforeach; ?>
    </table>
<form action="index.php" method="post">
    <input type="hidden" name="action" value="logout">
    <button class="btn btn-success" value="Logout">Logout</button>

</form>

<?php include('abstract/footer.php'); ?>