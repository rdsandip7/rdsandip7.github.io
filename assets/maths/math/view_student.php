<div class="wrapper style2">
	<section class="container">
		<div class="col-md-12">	
		<div class="">
			<?php
				require_once('connection.class.php');
				require_once('student.class.php');
				$objStudent=new Student();
				$students = $objStudent->allStudents();
			?>

		<table>
			<tr>
				<th scope="col">Student Name</th>
				<th scope="col">Roll Number</th>
				<th scope="col">Marks in Database</th>
				<th scope="col">Marks in Web</th>
				<th scope="col">Marks in Maths</th>
				<th scope="col">Marks in Programming</th>
				<th scope="col">Marks in Network</th>
			</tr>
			<?php foreach($customers as $key=>$value){?>
				<tr>
					<td><?php echo $value['studentName'];?></td>
					<td><?php echo $value['rollno'];?></td>
					<td><?php echo $value['databasem'];?></td>
					<td><?php echo $value['webm'];?></td>
					<td><?php echo $value['mathm'];?></td>
					<td><?php echo $value['programingm'];?></td>
					<td><?php echo $value['networkm'];?></td>
				</tr>
			<?php } ?>
		</table>
	</section>
</div>


