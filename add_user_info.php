<!doctype html>
<html>
    <head>
        <title>Add Info</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <div class="alert alert-danger">
                    <strong>
                        <?php
                if(!empty($_GET['message'])) {
                    echo $message = $_GET['message'];
                }
                ?>
                </strong> 
                </div>
                </div>
            </div>
        </div>
        <form action="save_user_info.php" method="post" >
            <div class="container">
                <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" required name="first_name" class="form-control" id="fist_name" aria-describedby="nameHelp" placeholder="Enter First Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" required name="last_name" class="form-control" id="last_name" aria-describedby="nameHelp" placeholder="Enter Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Email Address</label>
                        <input type="email" required name="user_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Date Of Birth</label>
                        <input type="date" required name="dob" class="form-control" id="dob" aria-describedby="emailHelp" placeholder="Enter Date Of Birth">
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Mobile No.</label>
                        <input type="tel" required name="contact_no" class="form-control" pattern="[6-9]{1}[0-9]{9}" title="Mobile Number Must start with 6 or 7 or 8 or 9" aria-describedby="" placeholder="Enter Mobile No.">
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="">Gender</label>
                            <div class="radio">
                            <label> <input type="radio" required name="gender" checked value="female"> Female</label>
                            </div>
                            <div class="radio">
                            <label> <input type="radio" required name="gender" value="male"> Male</label>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group" required>
                            <label for="exampleInputEmail1">Hobbies</label>
                            <div class="checkbox">
                                <label><input type="checkbox" name="hobbie[]" value="Hobbie 1"> Hobbie 1</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="hobbie[]" value="Hobbie 2"> Hobbie 2</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="hobbie[]" value="Hobbie 3"> Hobbie 3</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="hobbie[]" value="Hobbie 4"> Hobbie 4</label>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
          </form>   
    </body>
</html>