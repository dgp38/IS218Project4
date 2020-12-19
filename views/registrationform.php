<?php
session_start();
include('abstract/header.php'); ?>
<link href="css/register.css" rel="stylesheet">
<h1>Registration Form</h1>
<body>
<form action ="index.php" method="post">
    <input type="hidden" name="action" value ="submit_registration">

    <div class="form-group">
        <label for="fname">First Name:</label>
        <input type="text" class="form-control" id="fname"
               placeholder="First name" name="fname">
    </div>
    <div class="form-group">
        <label for="lname">Last Name:</label>
        <input type="text" class="form-control" id="lname"
               placeholder="Last name" name="lname">
    </div>

    <div class="form-group">
        <label for="birthday">Date of Birth:</label>
        <input type="text" class="form-control" id="birthday"
               placeholder="Date of Birth:" name="birthday">
    </div>

    <div class="form-group">
        <label for="email">Email ID::</label>
        <input type="text" class="form-control" id="email"
               placeholder="Email ID:" name="email">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="text" class="form-control" id="password"
               placeholder="Password" name="password">
    </div>

    <div><input type="submit" value="Sign up"></div>
</form>
</body>
<?php include('abstract/footer.php'); ?>

