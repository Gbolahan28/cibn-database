<?php

$conn = mysqli_connect("localhost", "root", "csv");

if(isset($_POST["import"])) {
    $_FILES["files"]["copy of users"];

    if($_FILES["file"]["size"] > 0){
        $file = fopen($fileName, "r");

        while(($column = fgetcsv($file, 1000, ",")) !== FALSE){
            $sqlInsert = "Insert into data (name, type) values ('" .$column[0] . "','" . $column[1] ."')";

            $result = mysqli_query($conn, $sqlInsert);

            if(!empty($result)){
                echo "Csv Data imported into the database";
            } else {
                echo "Problem in importing csv";
            }
        }
    }
}

?>


<form action="" class="form-horizontal" method="post" name="uploadCsv" enctype="multipart/form-data">
    <div>
        <label for=""> choose file </label>
        <input type="file" name="file" accept=".csv">
        <button type="submit" name="import"> Import</button>
    </div>
</form>

<?php

$sqlSelect = "SELECT * from users";

$result = mysqli_query($conn, $sqlSelect);

if(mysqli_num_rows($result) > 0){
    ?>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>member_id</th>
                <th>membership_categories_id</th>
                <th>membership_status_id</th>
                <th>surname</th>
                <th>firstname</th>
                <th>middlename</th>
                <th>email</th>
                <th>password</th>
                <th>email_verify_status</th>
                <th>paid</th>
                <th>profile_completed</th>
                <th>reg_steps</th>
                <th>ccpdYear</th>
                <th>remember_token</th>
                <th>upgraded_at</th>
                <th>created_at</th>
                <th>uploaded_at</th>
            </tr>
        </thead>
        <?php
    while ($row = mysqli_fetch_array($result)){

        ?>
        <tbody>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['member_id'];?></td>
                <td><?php echo $row['membership_categories_id'];?></td>
                <td><?php echo $row['membership_status_id'];?></td>
                <td><?php echo $row['surname'];?></td>
                <td><?php echo $row['firstname'];?></td>
                <td><?php echo $row['middlename'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['password'];?></td>
                <td><?php echo $row['email_verify_status'];?></td>
                <td><?php echo $row['paid'];?></td>
                <td><?php echo $row['profile_completed'];?></td>
                <td><?php echo $row['reg_steps'];?></td>
                <td><?php echo $row['ccpdYear'];?></td>
                <td><?php echo $row['remember_token'];?></td>
                <td><?php echo $row['upgraded_at'];?></td>
                <td><?php echo $row['created_at'];?></td>
                <td><?php echo $row['uploaded_at'];?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    <?php } 
?>