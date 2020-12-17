<?php include('abstract/header.php'); ?>
<h1> <?php echo $F_name['fname'] ; ?>&nbsp;<?php echo $F_name['lname']; ?>  </h1>

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

<?php include('abstract/footer.php'); ?>