<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE STUDENT REGISTRATION SYSTEM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="header">
    <span style="color: #fff;"><i class="fas fa-registered"></i>NLINE STUDENT REGISTRATION SYSTEM</span>
</div>

<div class="container">
<div class="card text-center">
  <div class="card-header"> REGISTRATION FORM </div>
  <div class="card-body">
    <form method="post" action="insert.php">

            <div class="row">
                <div class="col-md-12">
                    <input type="text" class='form-control' placeholder='STU-ID E.g (STU001)' required name="stuid" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="text" class='form-control' placeholder='Firstname' required name="firstname" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="text" class='form-control' placeholder='Lastname' required name="lastname" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="text" class='form-control' placeholder='Othername' name="othername" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="email" class='form-control' placeholder=' @ Email' required name="email" />
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <input type="text" class='form-control' placeholder='Telephone (0)' maxlength="15" required name="phone_number" />
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <input type="date" class='form-control' required name="dob" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="number" class='form-control' placeholder='Level' required name="level" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="submit" class='form-control btn btn-danger' value="REGISTER" name="submit" />
                </div>
            </div>
</form>
  </div>
  <div class="card-footer text-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-braces" viewBox="0 0 16 16">
        <path d="M2.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C3.25 2 2.49 2.759 2.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6zM13.886 7.9v.163c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456V7.332c-1.114 0-1.49-.362-1.49-1.456V4.352C13.51 2.759 12.75 2 11.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6z"/>
    </svg> NASCO TECH
  </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="fontawesome-free-6.1.1-web/js/all.min.js"></script>
</body>
</html>