<!DOCTYPE html>
<html>
<head>  
  <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="includes/ionicons-2.0.1/css/ionicons.min.css">
  <link rel="shortcut icon" href="includes/img/universaltechlogo2.jpg" />
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<style>
		#infoTable{
			background-color:lightblue;
		}
	</style>
</head>
<body>
	<h1>Welcome to the Github practice boys</h1>
<div id="taable">
	<table id="infoTable">
		<thead>
			<tr>
				<th>Name</th>
				<th>Age</th>
				<th>email</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Neil</td>
				<td>19</td>
				<td>neil.llenes@gmail.com_addref</td>
			</tr>
			<tr>
				<td>Jesus</td>
				<td>19</td>
				<td>kusunokixrui@gmail.com</td>
				</tr>
			<tr>
				<td>Puru</td>
				<td>19</td>
				<td>rpaulojade@gmail.com</td>
			</tr>
		</tbody>

	</table>
</div>
	<button class="btn btn-primary" onclick="unHide()"> Click Me! </button>
</body>
<script src="includes/jQuery/jquery-3.2.1.min.js"></script>
<script src="includes/bootstrap/js/bootstrap.min.js"></script>  
<script>
function unHide() {
    var x = document.getElementById('taable');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
</script>
</html>