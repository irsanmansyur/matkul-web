<html>

<head>
    <title>Add Users</title>
    <link rel="stylesheet" href="css/material-dashboard.min.css">

</head>

<body>
    <div class="container my-5">
        <h1>Form Tambah User Oleh Taufik 161307</h1>
        <a href="index.php" class="btn btn-danger">Go to Home</a>
        <br /><br />

        <form action="add.php" method="post" name="form1">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama User</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Input nama User">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Inpu Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="#Nohp" class="col-sm-2 col-form-label">No Hp User</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="Nohp" name="nohp" placeholder="Inpu Nomor HP">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" name="Submit" class="btn btn-primary">Tambah User</button>
                </div>
            </div>
        </form>

        <?php
        // Check If form submitted, insert form data into users table.
        if (isset($_POST['Submit0'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['nohp'];

            // include database connection file
            include_once("config.php");

            // Insert user data into table
            $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

            // Show message when user added
            echo "User added successfully. <a href='index.php'>View Users</a>";
        }
        ?>
    </div>
</body>

</html>