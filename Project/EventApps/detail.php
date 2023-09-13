<?php 
include 'lib/db.php';

if (isset($_GET['detail'])) {
    $id = $_GET['detail'];

    $query = mysqli_query($connection, "SELECT * FROM events WHERE id_event = '$id'");
    $data = mysqli_fetch_array($query);

    if (isset($_POST['register'])) {
        $fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
        $phone = mysqli_real_escape_string($connection, $_POST['phone']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        
        $query = mysqli_query($connection, "INSERT INTO users (id_event, fullname, phone, email) VALUES ('$id','$fullname','$phone','$email')");
        
        if ($query){
            header("Location: index.php");
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Event Apps</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="index.php">Event Apps</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard/dashboard.php">Dashboard</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>



    <!-- CONTENT -->
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center"><?php echo $data['event_name'] ?></h3>
                        </div>
                        <p class="card-text"><?php echo $data['event_desc'] ?></p>
                        <span>Event date <?php echo $data['event_date'] ?></span>
                        <h1 class="text-center">Form Register Event</h1>
                        <form action="" method="post" autocomplete="off">
                            <div class="form-group">
                                <label for="">Fullname</label>
                                <input type="text" class="form-control" name="fullname" required>
                            </div>
                            <div class="form-group">
                                <label for="">No. Telephone</label>
                                <input type="number" class="form-control" name="fullname" required>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit" name="register">SEND</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>