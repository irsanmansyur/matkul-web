<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update0'])) {
    $id = $_POST['id'];

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
?>
<html>

<head>
    <title>Edit Mahasiswa Data</title>
    <link rel="stylesheet" href="css/material-dashboard.min.css">

</head>

<body>
    <div class="container my-5">
        <h1>Form Edit Mahasiswa Oleh Diken</h1>
        <a href="index.php" class="btn btn-danger">Go to Home</a>
        <br /><br />
        <form name="update_user" method="post" action="edit.php">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value=<?php echo $name; ?> name="name" id="inputEmail3" placeholder="Input nama User">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" value=<?php echo $email; ?> name="email" id="email" placeholder="Inpu Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="#Nohp" class="col-sm-2 col-form-label">No Hp User</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" value=<?php echo $mobile; ?> id="Nohp" name="mobile" placeholder="Inpu Nomor HP">
                </div>
            </div>
            <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" name="update" class="btn btn-primary">Edit Mahasiswa</button>
                </div>
            </div>
        </form>
</body>

</html>