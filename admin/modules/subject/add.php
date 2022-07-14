<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">

    <fieldset>
      <legend>Nowy Przedmiot</legend>
                        

        <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "subjcode">Numer Przedmiotu</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="subjcode" name="subjcode" placeholder=
                      "numer" type="text" value="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "subjdesc">Opis</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="subjdesc" name="subjdesc" placeholder=
                      "opis" type="text" value="">
                </div>
              </div>
            </div>

             <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "unit"></label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="unit" name="unit" placeholder=
                      "Liczba" type="number" value="">
                </div>
              </div>
            </div>
         <!--    <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "pre">Prerequisite</label>

                <div class="col-md-8">-->
                   <input class="form-control input-sm" id="pre" name="pre" placeholder=
                      "Prerequisite" type="hidden" value="">
            <!--    </div>
              </div>
            </div>-->
             <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "course">Rok</label>

                <div class="col-md-8">
                 <select class="form-control input-sm" name="course" id="course">
                      <?php
                      $course = new Course();
                      $cur = $course->listOfDistinctcourse(); 
                      foreach ($cur as $course) {
                        echo '<option value="'. $course->COURSE_ID.'">'.$course->COURSE_NAME.' </option>';
                      }

                      ?>
              
            </select> 
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "ay">Rok Akademicki</label>

                <div class="col-md-8">
                  <select class="form-control input-sm" name="ay" id="ay">
            <option value="2013-2014">2013-2014</option>
            <option value="2014-2015">2014-2015</option>
            <option value="2015-2016">2015-2016</option>
            <option value="2016-2017">2016-2017</option>
            <option value="2017-2018">2017-2018</option>
            <option value="2018-2019">2018-2019</option>
            <option value="2019-2020">2019-2020</option>  
          </select> 
                </div>
              </div>
            </div>
      <!--  <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "Semester">Semester</label>

                <div class="col-md-8">
                   <select class="form-control input-sm" name="Semester" id="Semester">
            <option value="First">First</option>
            <option value="Second">Second</option>  
            <option value="Summer">Summer</option>  
          </select>-->
          <input class="form-control input-sm" id="Semester" name="Semester" placeholder=
                      "warunek" type="hidden" value="First">
           <!--     </div>
              </div>
            </div>
      -->

       <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "idno"></label>

                <div class="col-md-8">
                  <button class="btn btn-default" name="savecourse" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Zapisz</button>
                 <button class="btn btn-default" name="saveandnewcourse" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Zapisz i dodaj nowy</button>
                </div>
              </div>
            </div>

        
    </fieldset> 

            
  </form>
  </div><!--End of container-->