<?php include("head.html")
?>
<body>
<div class="booking">
<h2>COTTAGE BOOKING FORM</h2>
	<form action="connect.php" method="post">
  	<br><br>
	<label for="full-name">Full Name:</label>
    <input type="text" name="n"  placeholder="Enter your name" required>
	<br><br>
    <label for="email">Email:</label>
    <input type="email" name="e" required>
	<br><br>
    <label for="phone">Phone Number:</label>
    <input type="tel"  name="p" required>
	<br><br>
    <label for="check-in-date">Check-in Date:</label>
    <input type="date" name="in" required>
	<br><br>
    <label for="check-out-date">Check-out Date:</label>
    <input type="date" name="out" required>
	<br><br>
    <label for="room-type">Room Type:</label>
    <select name="rt" required>
      <option value="single">Single Room</option>
      <option value="double">Double Room</option>
	  <option value="triple">Triple Room</option>
      <option value="suite">Suite</option>
    </select>
	<br><br>
	<label for="num-guests">Number of Guests:</label>
	<input type="number" id="num-children" name="ng" min="0" maxlength="10" required>
	<br><br>
	<label for="num-adults">Number of Adults:</label>
    <input type="number" id="num-adults" name="na" min="1" maxlength="10" required>
	<br><br>
    <label for="num-children">Number of Children:</label>
    <input type="number" id="num-guests" name="nc" min="1" maxlength="10" required>
	<br><br>
    <label for="special-requests">Special Requests:</label>
    <textarea id="special-requests" name="sr" rows="4"></textarea>
	<br><br>
    <input type="submit" value="Book Now">
	<input type="reset" value="Cancel">
  </form>
</div>
</body>
<?php include("foot.html")
?>