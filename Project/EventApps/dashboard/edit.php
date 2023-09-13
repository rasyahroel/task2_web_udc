<?php
include '../lib/db.php';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $query = mysqli_query($connection, "SELECT * FROM events WHERE id_event = '$id'");
    $data = mysqli_fetch_array($query);

    if (isset($_POST['updateevent'])) {
        $eventName = mysqli_real_escape_string($connection, $_POST['event_name']);
        $eventDesc = mysqli_real_escape_string($connection, $_POST['event_desc']);
        $eventDate = mysqli_real_escape_string($connection, $_POST['event_date']);

        $query = mysqli_query($connection, "UPDATE events SET event_name = '$eventName', event_desc = '$eventDesc', event_date = '$eventDate' WHERE id_event = '$id'");

        if ($query) {
            header('Location: dashboard.php');
        }
    }

    // if ($query) {
    //     $notif = '<div class="alert alert-success">Success Add Data</div>';
    // } else {
    //     $notif = '<div class="alert alert-danger">Failed Add Data</div>';
    // }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Event Apps</title>
</head>

<body>
    <!-- CONTENT -->
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <h1 class="text-center">Event Apps</h1>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">
                        <a class="btn btn-primary" href="dashboard.php">Back to Dashboard Event</a>
                        <a href="../index.php" class="btn btn-dark">See All Website</a>
                        <h1 class="text-center">Form Edit Event</h1>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Event</label>
                                <input type="text" class="form-control" name="event_name" value="<?php echo $data['event_name'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Description Event</label>
                                <textarea name="event_desc" class="form-control" cols="30" rows="10"><?php echo $data['event_desc'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Date Event</label>
                                <input type="date" class="form-control" name="event_date" value="<?php echo $data['event_date'] ?>">
                            </div>
                            <button type="submit" class="btn btn-warning" name="updateevent">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>