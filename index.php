<?php
	if ($_GET['q'] == 'Kërko...'){
		header('Location: index.php');
	}
	if ($_GET['q'] != '') {
		$con = mysql_connect('localhost','root','');
		$db = mysql_select_db(dbname);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>search</title>
		<link rel="stylesheet" href="css/style.css" />
		<script type="text/javascript">
			function active(){
				var searchBar = document.getElementById('searchBar');
				if(searchBar.value== 'Kërko...'){
					searchBar.value= '';
					searchBar.placeholder= 'Kërko...';
				}
			}
			function inactive(){
				var searchBar = document.getElementById('searchBar');
				if(searchBar.value== ''){
					searchBar.value= 'Kërko...';
					searchBar.placeholder= '';
				}
			}

		</script>
	</head>
	<body>
		<form action="index.php" method="GET" id="seachForm">
			<input type="text" name='q' id="searchBar" placeholder="" value="Kërko..." maxlength="25" autocomplete="off" onMouseDown="active();" onBlur="inactive();" /><input type="submit" id="searchBtn" value="Kërko!" />
		</form>
		<?php
			if (!isset($q)) {
				echo '';	
			}
			else{
				$query = mysql_query("SELECT * FROM test WHERE testtitle LIKE '%$q%' OR testdescription LIKE '%$q%' ");
				$num_rows = mysql_num_rows($query);
				?>
				<p><strong><?php echo $num_rows; ?></strong> rezultate për '<?php $q; ?>'</p>
				<?php
				while ($row = mysql_fetch_array($query)) {
					$id = $row['id'];
					$title = $row['title'];
					$desc = $row['description'];

					echo '<h3><a href="' . $id . '.php">' . $title  . '</a></h3><p>' . $desc . </p> . '</p><br/>';
				}
			}
		?>
	</body>
</html>
<?php 
	}
	else{
		header('Location: index.php');
	}


 ?>	
