<!DOCTYPE html>
<html>

<head>
	<title>Admin Booking History</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">HOTEL <p style="color: #e6b800; display: inline;">MANAGEMENT</p> SYSTEM</td>
		</tr>
	</table>
	<ul>
		<li><a href="admin_view.php">Rooms Info</a></li>
		<li><a href="add_room_admin.php">Add Room</a></li>
		<li><a href="remove_room_admin.php">Remove Rooms</a></li>
		<li><a href="admin_room_status.php">Booking Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<table class="basic_box">
			<tr>
				<td colspan="6">
					<p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Booking History</b></p>
				</td>
			<tr>
				<th>Booking ID</th>
				<th>Name</th>
				<th>Room Type</th>
				<th>Check-in Date</th>
				<th>Check-out Date</th>
				<th>Price</th>
			</tr>
			<tr>
				<?php
				$conn = new mysqli("localhost", "root", "", "iwp");
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				$sql1 = "SELECT * from booked_hist";
				if ($result = mysqli_query($conn, $sql1)) {
					while ($row = mysqli_fetch_row($result)) {
				?>
						<td><?php echo $row[14]; ?></td>
						<td><?php echo $row[1]; ?></td>
						<td><?php echo $row[3]; ?></td>
						<td><?php echo $row[4]; ?></td>
						<td><?php echo $row[5]; ?></td>
						<td><?php echo $row[13]; ?></td>
			</tr><?php
					}
					mysqli_free_result($result);
				} ?>
		</table><br><br>
		<table class="basic_box">
			<tr>
				<td colspan="1">Enter Booking ID:</td>
				<td colspan="2">
					<form action="admin_room_history.php" method="post">
						<input type="number" name="book_id">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style="text-align: center;"><button type="submit">View Details</button></td>
				</form>
			</tr>
		</table>
	</div>
</body>

</html>