<div class="container" style="margin-top: 90px"> 
<div class="container">
	<?php
		check_message();
			
		?>
		<div class="wellss">
			<?php 

				$student = new Student();
				$cur = $student->single_student($_SESSION['IDNO']);
			?>
			  				
				 <fieldset>
						<legend>Informacje o Studencie</legend>
					<table class="table table-bordered" cellspacing="0">
						<tr><td>Numer ID :</td><td width="80%"><?php echo $cur->IDNO; ?></td></tr>	
							<td>Imie Nazwisko :</td><td><?php echo $cur->LNAME .', '. $cur->FNAME.', '. $cur->MNAME; ?></td>	</tr></tr>
							<td>Płeć :</td><td><?php 
								if($cur->SEX== 'F'){
									echo "Female";
								}else{
									echo "Male";
								}	
								 ?></td>	</tr>
							<td>Wiek :</td><td><?php echo $cur->AGE; ?></td>	</tr>
							<td>Data Urodzin :</td><td><?php echo $cur->BDAY; ?></td>	</tr>
							<td>Miejsce Urodzin :</td><td><?php echo $cur->BPLACE; ?></td>	</tr>
							<td>Status Cywilny :</td><td><?php echo $cur->STATUS; ?></td>	</tr>
							<td>Narodowosc :</td><td><?php echo $cur->NATIONALITY; ?></td>	</tr>
							<td>Religia :</td><td><?php echo $cur->RELIGION; ?></td>	</tr>
							<td>Numer Telefon :</td><td><?php echo $cur->CONTACT_NO; ?></td>	</tr>
							<td>Email Adres :</td><td><?php echo $cur->EMAIL; ?></td>	</tr>
							<td> Adres :</td><td><?php echo $cur->HOME_ADD; ?></td>	</tr>
						
						</tr>
					</table>	


				</fieldset>
				<?php
				$details = new Student_details();
				$det = $details->secondary_details($_SESSION['IDNO']);
				?>
				 <fieldset>
						<legend>Szczególy</legend>
						<table class="table table-bordered" cellspacing="0" width="100%">
						<tbody>	
							<tr><td>Ojciec :</td><td width="80%"><?php echo $det->FATHER; ?></td></tr>
							<tr><td>Zawód :</td><td><?php echo $det->FATHER_OCCU; ?></td></tr>
							<tr><td>Matka :</td><td><?php echo $det->MOTHER; ?></td></tr>
							<tr><td>Zawód :</td><td><?php echo $det->MOTHER_OCCU; ?></td></tr>	
							<tr><td>Z Rodzina :</td><td><?php echo $det->WITH_FAMILY; ?></td></tr>
							<tr><td>Opiekun :</td><td><?php echo $det->GUARDIAN; ?></td></tr>
							<tr><td>Adres :</td><td><?php echo $det->GUARDIAN_ADDRESS; ?></td></tr>
							
						</tbody>	
						</table>
						 


							
			
	  	</div><!--End of well-->

</div><!--End of container-->