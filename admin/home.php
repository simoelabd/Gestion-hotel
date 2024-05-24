<style>
	.custom-menu {
        z-index: 1000;
	    position: absolute;
	    background-color: #ffffff;
	    border: 1px solid #0000001c;
	    border-radius: 5px;
	    padding: 8px;
	    min-width: 13vw;
}
a.custom-menu-list {
    width: 100%;
    display: flex;
    color: #4c4b4b;
    font-weight: 600;
    font-size: 1em;
    padding: 1px 11px;
}
	span.card-icon {
    position: absolute;
    font-size: 3em;
    bottom: .2em;
    color: #ffffff80;
}

</style>
<?php
include 'db_connect.php';

// Query to get the count of bookings

$sql_bookings = "SELECT COUNT(*) AS total_bookings FROM checked";
$result_bookings = $conn->query($sql_bookings);
$total_bookings = 0;
if ($result_bookings->num_rows > 0) {
    $row_bookings = $result_bookings->fetch_assoc();
    $total_bookings = $row_bookings["total_bookings"];
}

// Query to get the count of rooms

$sql_rooms = "SELECT COUNT(*) AS total_rooms FROM rooms";
$result_rooms = $conn->query($sql_rooms);
$total_rooms = 0;
if ($result_rooms->num_rows > 0) {
    $row_rooms = $result_rooms->fetch_assoc();
    $total_rooms = $row_rooms["total_rooms"];
}

// Query to get the count of users

$sql_users = "SELECT COUNT(*) AS total_users FROM users";
$result_users = $conn->query($sql_users);
$totalt_users = 0;
if ($result_users->num_rows > 0) {
    $row_users = $result_users->fetch_assoc();
    $total_users = $row_users["total_users"];
}


$conn->close();

?>


<div class="containe-fluid">

	<div class="row">
		<div class="col-lg-12">
			<div class="card col-md-4 offset-2 bg-info float-left">
				<div class="card-body text-white">
					<h4><b>Booking</b></h4>
					<hr>
					<span class="card-icon"><i class="fa fa-users"></i></span>
					<h3 class="text-right"><?php echo $total_bookings; ?></h3>
				</div>
			</div>
			<div class="card col-md-4 offset-2 bg-primary ml-4 float-left">
				<div class="card-body text-white">
					<h4><b>Rooms</b></h4>
					<hr>
					<span class="card-icon"><i class="fa fa-user-tie"></i></span>
					<h3 class="text-right"><b><?php echo $total_rooms; ?></b></h3>
				</div>
			</div>
			<div class="card col-md-4 offset-2 bg-primary ml-4 float-left">
				<div class="card-body text-white">
					<h4><b>Users</b></h4>
					<hr>
					<span class="card-icon"><i class="fa fa-user-tie"></i></span>
					<h3 class="text-right"><b><?php echo $total_users; ?></b></h3>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	
</script>