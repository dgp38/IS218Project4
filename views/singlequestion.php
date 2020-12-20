<?php
session_start();
include('abstract/header.php'); ?>
<h1> <?php echo $F_name['fname'] ; ?>&nbsp;<?php echo $F_name['lname']; ?></h1>



    <h3> Question Detail:</h3>
    <table class="table">
        <tr>
            <th>Title</th>
            <th>body</th>
            <th>skill</th>

        </tr>

        <tr>
            <td><?php echo $questionid['title']; ?></td>
            <td><?php echo $questionid['body']; ?></td>
            <td><?php echo $questionid['skills']; ?></td>
        </tr>

    </table>


<?php include('abstract/footer.php'); ?>