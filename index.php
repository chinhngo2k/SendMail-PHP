<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="boostrap/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <h2>Send an Email</h2>
        <h4 class="notice"></h4>
        <form action="./sendEmail.php" id="myForm" method="post">
            <div class="form-group">
                <label>User name:</label>
                <input id="name" type="text" class="form-control" placeholder="Enter user name" name="name">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input id="email" type="email" class="form-control" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <p>Message</p>
                <textarea id="body" name="body" rows="5" placeholder="Type message"></textarea>
            </div>

            <button name="btn" type="submit" value="Send an Email" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="boostrap/bootstrap.bundle.min.js"></script>
</body>

</html>