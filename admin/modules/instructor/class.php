<div class="container">	
	<?php

  	 if (isset($_GET['id'])){			
			$mydb->setQuery("SELECT * 
								FROM  `subject` s,  `course` c  ,class cl
								WHERE s.`COURSE_ID` = c.`COURSE_ID` 
								AND s.`SUBJ_ID`=cl.`SUBJ_ID` 
								AND  `CLASS_ID` = ".$_GET['id']."");
			$cur = $mydb->loadSingleResult();		
		}
	  ?>
<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span>  </h3>
	  </div>
	  <div class="panel-body">
	   <div class="row" >
	   <div class="container">	
		
			  
    	<form class="form-horizontal span4" action="" method="POST">
    		<table class="table" align="center" >	 
    			
				  <tbody>				    
			     	<tr>
			     		<td><strong>numer przedmiotu:</strong> <?php echo (isset($cur)) ? $cur->SUBJ_CODE : 'Code' ;?><br/>
			     		<strong>opis:</strong> <?php echo (isset($cur)) ? $cur->SUBJ_DESCRIPTION  : 'Description' ;?><br/>
			     	<!--	<td><?php //echo (isset($cur)) ? $cur->SEMESTER : 'Semester' ;?></td>-->
			     		<strong>klasa i sekcja:</strong> <?php echo (isset($cur)) ? $cur->COURSE_DESC : 'Course' ;?><br/>
			     	<!--	<td><?php //echo (isset($cur)) ? $cur->COURSE_LEVEL : 'Level' ;?></td>-->
			     		
			     		<strong>czas:</strong> <?php echo (isset($cur)) ? $cur->DAY . ' ' .$cur->C_TIME : 'DaysTime' ;?><br/>
			     	<strong>:</strong> <?php echo (isset($cur)) ? $cur->ROOM : 'Room' ;?><br/>
			     	<strong>Sekcja:</strong> <?php echo (isset($cur)) ? $cur->SECTION : 'Room' ;?></td>
			     	 
			     	</tr>
		    	</tbody>
		    </table>
				</form>

</div><!--End of container-->
<div class="container">
	<?php
		check_message();
	?>
		<div class="wellss">
			<h3 align="left">Lista studentow</h3>
			    <form action="" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr id="table" >
				  		<tr>
				  			<th>No.</th>
				  		<th>  ID#.</th>
				  		<th>imie i nazwisko</th>
				  		<th>plec</th>
				  	<!--	<th>Age</th>
				  		<th>Birth Date</th>
				  		<th>Status</th>-->
				  		<th>1</th>
				  		<th>2</th>
				  		<th>3</th>
				  		<th>4</th>
						<th>Final</th>				  		
				  		<th>uwagi</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 

				  	global $mydb;
				

				  		$mydb->setQuery(" SELECT * 
										FROM  `class` c, `grades` g,  `tblstudent` s
										WHERE c.`SUBJ_ID` = g.`SUBJ_ID` 
										AND g.`IDNO` = s.`IDNO` AND CLASS_ID='".$_GET['id']."'");
				  		loadresult();
				  	
				  		function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $student) {
					  		echo '<tr>';
					  		echo '<td width="5%" align="center"></td>';
					  		// echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$student->IDNO. '"/>
					  		// 		<a href="edit_studentinfo.php?id='.$student->IDNO.'">' . $student->IDNO.'</a></td>';
					  		echo '<td>' . $student->IDNO.'</td>';
					  		echo '<td><a href="index.php?view=grade&classId='.$_GET['id'].'&gradeId='.$student->GRADE_ID.'&instructorId='.$_GET['instructorId'].'">'. $student->LNAME. ',' .$student->FNAME.' '.$student->MNAME.'</a></td>';
					  		echo '<td>'. $student->SEX.'</td>';
					  		/*echo '<td>'. $student->AGE.'</td>';
					  		echo '<td>'. $student->BDAY.'</td>';
					  		echo '<td>'. $student->STATUS.'</td>';*/
					  		echo '<td>'. $student->FIRST.'</td>';
					  		echo '<td>'. $student->SECOND.'</td>';
					  		echo '<td>'. $student->THIRD.'</td>';
					  		echo '<td>'. $student->FOURTH.'</td>';
					  		echo '<td>'. $student->AVE.'</td>';  
					  		echo '<td>'. $student->REMARKS.'</td>';  
					  		echo '</tr>';
					  		}

				  		} 
				  	
				  	?>

 
				  </tbody>
				 
				</table>
				<div class="btn-group">
				  <a href="index.php?view=instSubj&instructorId=<?php echo $_GET['instructorId'];?>" class="btn btn-default">powrot</a>
				  <!--  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button> -->
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
</div>
</div>
</div>
</div>