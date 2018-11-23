<?php include('includes/header.php');?>

<div id="mainContent">
<center><h1>LOGIN</h1></center>

</div>

<div id="LoginDiv">
	<form class="form-horizontal">
		<label>USERNAME:</label>
		<input type="text" name="username" class="form-control" required>
		<label>PASSWORD:</label>
		<input type="password" name="password" class="form-control" required>
		<input type="submit" name="submit" class="btn-success" value="LOGIN">
	</form>
</div>

<?php include('includes/footer.php');?>

</body>
</html>