<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CSE311L Project</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	h3 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 14px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	#table {
		margin: 20px;
	}

	#habijabi {
		margin: 20px;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>List of all schools</h1>
	<h3>Data From Database</h3>

	<table id="table">
		<thead>
			<th>[School ID] </th>
			<th>[Area ID] </th>
			<th>[Name of School] </th>
            <th>[Established] </th>
            <th>[Public/Private] </th>
			<th>[Government Project(s)] </th>
			<th>[Number of Students] </th>
			<th>[Number of Teachers]</th>
		</thead>

		<tbody>
			<?php foreach ($school_list as $row) { ?>
				<tr>
					<td><?php echo $row['SCHOOL_ID']; ?></td>
					<td><?php echo $row['AREA_ID']; ?></td>
					<td><?php echo $row['SCHOOL_NAME']; ?></td>
                    <td><?php echo $row['ESTD_YEAR']; ?></td>
                    <td><?php echo $row['PUB_PVT']; ?></td>
					<td><?php echo $row['GOVERNMENT_PROJ']; ?></td>
					<td><?php echo $row['NUM_STUDENTS']; ?></td>
					<td><?php echo $row['NUM_TEACHERS']; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<!p>
		<!a id = "habijabi" href = "http://localhost/AreaSchoolDBase/index.php/School/schoolsByArea"><!View Schools by Area</a> 
	<!/p>

	<p id = "habijabi">View schools by area</p>
	<select id = "habijabi">
		<?php foreach ($school_list as $row) { ?>
			<option value = <?php $row['SCHOOL_ID']; ?> ><?php echo $row['SCHOOL_NAME']; ?></option>
		<?php } ?>
	</select>
	
	<p id = "name"></p>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	<p class="footer">
		<a href="http://localhost/AreaSchoolDBase/index.php/">Return to Home page</a>
	</p>
</div>

</body>
</html>
