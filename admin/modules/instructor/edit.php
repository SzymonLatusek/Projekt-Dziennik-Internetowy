<?php
  $instid = $_GET['id'];
  $singleinstructor = new Instructor();
  $object = $singleinstructor->single_instructor($instid);

?>
 <form class="form-horizontal well span4" action="controller.php?action=edit&id=<?php echo $instid;?>" method="POST">

          <fieldset>
            <legend>Nowy</legend>
                              

              <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "name">imie i nazwisko:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="name" name="name" placeholder=
                            "" type="text" value="<?php echo $object->INST_FULLNAME;?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "address">adrres:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="address" name="address" placeholder=
                            " Adres" type="text" value="<?php echo $object->INST_ADDRESS;?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Gender">plec:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="Gender" id="Gender">
                          <option value="M">mezczyzna</option>
                          <option value="F">kobieta</option>
                          
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "civilstats">status cywilny:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="civilstats" id="civilstats">
                          <option value="Single">Singiel</option>
                          <option value="Married">zonaty/zamezna</option>
                          
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "specialization">Specializacja:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="specialization" name="specialization" placeholder=
                            "Specializacja" type="text" value="<?php echo $object->SPECIALIZATION;?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "empStats">Status:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="empStats" name="empStats" placeholder=
                            " Status" type="text" value="<?php echo $object->EMPLOYMENT_STATUS;?>">
                      </div>
                    </div>
                  </div>
                  


            <!-- <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "email">Email Address:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value=""> -->
                         <input class="form-control input-sm" id="email" name="email" placeholder=
                            "Email Address" type="hidden" value="<?php echo $object->INST_EMAIL;?>">
                <!--     </div>
                  </div>
                      </div>
 -->


                  
            <?php
                          if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
            echo '
                        
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn btn-default" name="savefaculty" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                      </div>
                    </div>
                  </div>';
                }
                ?>

              
          </fieldset> 

                  
        </form>
        </div><!--End of container-->