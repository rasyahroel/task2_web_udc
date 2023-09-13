<?php
include '../lib/db.php';

if (isset($_POST['addevent'])) {
    $eventName = mysqli_real_escape_string($connection, $_POST['event_name']);
    $eventDesc = mysqli_real_escape_string($connection, $_POST['event_desc']);
    $eventDate = mysqli_real_escape_string($connection, $_POST['event_date']);

    $query = mysqli_query($connection, "INSERT INTO events (event_name, event_desc, event_date) VALUES ('$eventName', '$eventDesc', '$eventDate')");

    if ($query) {
        $notif = '<div class="alert alert-success">Success Add Data</div>';
    } else {
        $notif = '<div class="alert alert-danger">Failed Add Data</div>';
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = mysqli_query($connection, "DELETE from events WHERE id_event = '$id'");

    if ($query) {
        $notifDelete = '<div class="alert alert-success">Success Delete Data</div>';
    } else {
        $notifDelete = '<div class="alert alert-danger">Failed Delete Data</div>';
    }
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
            <div class="col-md-7">
                <div class="card border-0 shadow-lg">
                    <?php
                    if (isset($notif)) {
                        echo $notif;
                    } elseif (isset($notifDelete)) {
                        echo $notifDelete;
                    }
                    ?>
                    <div class="card-body">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalevents">Add Event</button>
                        <a href="../index.php" class="btn btn-dark">See All Website</a>
                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th>Event Name</th>
                                    <th>Description Event</th>
                                    <th>Event Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($connection, "SELECT * FROM events");
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $data['event_name'] ?></td>
                                        <td><?php echo $data['event_desc'] ?></td>
                                        <td><?php echo $data['event_date'] ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button id="actionbtn" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action button
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="edit.php?edit=<?php echo $data['id_event'] ?>">Edit</a></li>
                                                    <li><a class="dropdown-item" href="dashboard.php?delete=<?php echo $data['id_event'] ?>">Delete</a></li>
                                                </ul>

                                                <!-- <button id="actionbtn" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action button
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="actionbtn">
                                                    <a href="" class="dropdown-item">Edit</a>
                                                    <a href="" class="dropdown-item">Delete</a>
                                                </div> -->
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">
                        <div class="card-title">
                            <h3>List User Event</h3>
                        </div>
                        <ul class="list-group">
                            <?php
                            $query = mysqli_query($connection, "SELECT * FROM users INNER JOIN events ON events.id_event = users.id_event");
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <li class="list-group-item"><span class="badge badge-primary"><?php echo $data['event_name'] ?></span> / <?php echo $data['fullname'] ?> / <?php echo $data['email'] ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalevents" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form New Event</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">New Event</label>
                            <input type="text" class="form-control" name="event_name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Description Event</label>
                            <textarea name="event_desc" class="form-control" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Date Event</label>
                            <input type="date" class="form-control" name="event_date" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="addevent">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>