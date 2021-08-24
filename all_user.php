<?php
include('db_con.php');

$query=mysqli_query($con, "select * from user_info order by id desc");

?>

<!doctype html>
<html>
    <head>
        <title>Users Info</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <table border="1">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>DOB</th>
                        <th>Mobile No.</th>
                        <th>Gender</th>
                        <th>Hobbies</th>
                    </thead>
                    <tbody>
                        <?php
                        if($query){
                            $i=1;
                        while ($val = mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td><?=$i++;?></td>
                            <td><?=$val['first_name']." ".$val['last_name']?></td>
                            <td><?=$val['user_email']?></td>
                            <td><?=date('d-m-Y',strtotime($val['dob']))?></td>
                            <td><?=$val['contact_no']?></td>
                            <td><?=$val['gender']?></td>
                            <td><?=$val['hobbie']?></td>
                        </tr>
                       <?php } }
                        ?>

                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </body>
</html>