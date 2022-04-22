<?php
$connect = mysqli_connect("localhost", "root", "", "permit");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM tbl_permit 
	WHERE studentName LIKE '%".$search."%'
	OR username LIKE '%".$search."%' 
	OR course1 LIKE '%".$search."%' 
	OR course2 LIKE '%".$search."%' 
	OR course3 LIKE '%".$search."%'
	OR course4 LIKE '%".$search."%'
	OR course5 LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM tbl_permit ORDER BY studentID";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered print">
						<tr>
							<th>Student Name</th>
							<th>User Name</th>
							<th>Course 1</th>
							<th>Course 2</th>
							<th>Course 3</th>
							<th>Course 4</th>
							<th>Course 5</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["studentName"].'</td>
				<td>'.$row["username"].'</td>
				<td>'.$row["course1"].'</td>
				<td>'.$row["course2"].'</td>
				<td>'.$row["course3"].'</td>
				<td>'.$row["course4"].'</td>
				<td>'.$row["course5"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>