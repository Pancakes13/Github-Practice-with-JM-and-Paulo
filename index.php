<!DOCTYPE html>
<html>
<head>
	<title>Github Practice</title>
	<link rel="stylesheet" href="includes/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="includes/ionicons-2.0.1/css/ionicons.min.css">
	<link rel="shortcut icon" href="includes/img/doggo.jpg">
	<link rel="stylesheet" href="includes/datatables/dataTables.bootstrap.css">
	<style>
		#infoTable{
			width:100%;
		}
		#buttonContent{
			width:20%;
		}
	</style>
</head>
<body>
	<h1>Welcome to the Github practice boys</h1>
	<div id="taable">
		<table id="infoTable" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>Email</th>
					<th>View</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Neil</td>
					<td>19</td>
					<td>neil.llenes@gmail.com_addref</td>
					<td><button class="btn btn-info">View Website <span class="fa fa-eye"></span></button></td>
				</tr>
				<tr>
					<td>Jesus</td>
					<td>19</td>
					<td>kusunokixrui@gmail.com</td>
					<td><button class="btn btn-info">View Website <span class="fa fa-eye"></span></button></td>
				</tr>
				<tr>
					<td>Puru</td>
					<td>19</td>
					<td>rpaulojade@gmail.com</td>
					<td><button class="btn btn-info">View Website <span class="fa fa-eye"></span></button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div align="center">
		<button id="buttonContent" class="btn btn-primary" onclick="unHide()"></button>
	</div>
</body>
<script src="includes/jQuery/jquery-3.2.1.min.js"></script>
<script src="includes/bootstrap/js/bootstrap.min.js"></script>
<script src="includes/datatables/jquery.dataTables.min.js"></script>
<script src="includes/datatables/dataTables.bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$("#infoTable").DataTable();
	document.getElementById('buttonContent').innerHTML = "HIDE";
});
function unHide() {
    var x = document.getElementById('taable');
	if(document.getElementById('buttonContent').innerHTML == "HIDE"){
		document.getElementById('buttonContent').innerHTML = "SHOW";
	}else{
		document.getElementById('buttonContent').innerHTML = "HIDE";
	}
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
</script>
</html>