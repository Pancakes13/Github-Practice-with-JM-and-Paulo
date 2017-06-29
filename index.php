<!DOCTYPE html>
<html>
<head>
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
				<td>Neil</td>
				<td>19</td>
				<td>neil.llenes@gmail.com_addref</td>
			</tr>
			<tr>
				<td>Puru</td>
				<td>19</td>
				<td>rpaulojade@gmail.com</td>
			</tr>
		</tbody>
	</table>
</div>
	<button onclick="unHide()"> Click Me! </button>
</body>
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