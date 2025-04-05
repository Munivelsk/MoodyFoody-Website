<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoodyFoody Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of Users</h2>
        <a class="btn btn-primary" href="create.php" role="button">New Client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>User_ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "moodyfoody";

                $connection = new mysqli($servername,$username,$password,$database);

                if($connection->connect_error){
                    die("Connection Failed : ".$connection->connect_error);
                }

                $sql = "SELECT * FROM users";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query: ".$connection->error);
                }

                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[user_id]</td>
                        <td>$row[username]</td>
                        <td>$row[email]</td>
                        <td>$row[password]</td>
                        <td>$row[phone]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='edit.php?id=$row[user_id]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='delete.php?id=$row[user_id]'>Delete</a>
                        </td>
                    </tr>
                    ";
                }
                $connection->close();
                ?>
            </tbody>
        </table>
    </div>    
</body>
</html>
