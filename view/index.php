<?php include('includes/header.php');?>

<div id="mainContent">
		<center><h1>BLOG</h1><a href="add" class="btn-success" style="text-decoration: none;">ADD</a></center>
		<div id="blogContent">
			<?php foreach($blogs as $blog):?>
				<div>
					<a href="./remove?idno=<?php echo $blog['idno'];?>"><span class="deleteBtn">&times;</span></a>
					<h3><?php echo $blog['title'];?></h3>
					<p><?php echo $blog['body'];?></p>
					<small><?php echo $blog['datecreated'];?></small>
					<a href="./viewblog?idno=<?php echo $blog['idno'];?>">VIEW</a>
				</div>
			<?php endforeach ?>
		</div>
</div>

<?php include('includes/footer.php');?>

</body>
</html>