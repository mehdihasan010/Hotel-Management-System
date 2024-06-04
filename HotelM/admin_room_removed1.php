<!DOCTYPE html>
<html>
<head>
	<title>Admin Room Added</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<script>
    function submitForm(action)
    {
        document.getElementById('columnarForm').action = action;
        document.getElementById('columnarForm').submit();
    }
</script>
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
					<td>Admin Room removed successfully</td>
				</tr>
				<tr>
					<td><a href="admin_view.php">Click here to get redirected.</a></td>
				</tr>
			</table>
		</div>
	</body>
</html>