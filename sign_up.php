
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugin/bootstrap.min.css">
    <script src="plugin/jquery.min.js"></script>
    <script src="plugin/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <link rel="stylesheet" href="css/sign_up.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/sign_up.css">
    <title>my blog</title>
</head>
<body>
    <?php include_once("inc/navbar.php")?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card_header"id="card_header">Sign Up form

                    </div>
                    <form action="index.php">
                    <div class="card_body" id="card-body">
                        <div class="form-group">
                          <label for="">First name</label>
                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Enter your name</small>
                        </div>
                        <div class="form-group">
                          <label for="">Last name</label>
                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Enter your Last Name</small>
                        </div>
                        <div class="form-group">
                          <label for="">Email</label>
                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Enter your Email</small>
                        </div>
                        <div class="form-group">
                          <label for="">Password</label>
                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Password/<small>
                        </div>

                    </div>
                    <div class="card_footer">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                        

                    </div>
                    </form>

                </div>
            </div> 
    </div>
    
</body>
</html>