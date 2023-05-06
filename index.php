<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    
    <div class="container">
        <form action="./upload.php" class="form-group" method="post" name="form">
            <div class="form-group">
                <label for="emailAdress">Email adress</label>
                <input class="form-control" type="email" id="emailAdress" name="emailAdress" placeholder="Enter email">
                <small class="form-text text-muted">Please enter your registered email</small>
            </div>
            <div class="form-group">
                <label for="fullName">Fullname</label>
                <input class="form-control" type="text" id="fullName" name="fullName" placeholder="Enter your username">
            </div>
            <div class="form-group"> 
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" name="password" placeholder="Enter a password" >
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkMe">
                <label class="form-check-label" for="checkMe">Check me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>  
    </div>

    <script src="./js/bootstrap.js"></script>
    <script src="./js/jquery.js"></script>
</body>
</html>