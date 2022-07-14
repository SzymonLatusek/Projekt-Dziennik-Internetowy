
           <div class="card-header">
             <h5>Dodaj Nowego Studenta</h5>
           </div>
              <div class="card-body">
                <form action="controller.php?action=add" class="form-horizontal  span9" method="post" autocomplete="off"> 

 
        <div class="row"> 
        <div class="col-md-4">
          <div class="form-group">
            <label  for="idno">ID Numer*</label> 
              <input class="form-control input-sm" id="idno" name="idno" placeholder=
              "ID Numer" type="number" value=""> 
          </div>
        </div>  
      </div>

        <div class="row">  
          <div class="col-md-4">
            <div class="form-group">
              <label for="lName">NAzwisko:*</label> 
                <input class="form-control input-sm" id="lName" name="lName"
                placeholder="Nazwisko" type="text">
            </div>
          </div> 

          <div class="col-md-4">
            <div class="form-group">
            <label for="fName">Imie:*</label> 
              <input class="form-control input-sm" id="fName" name="fName"
              placeholder="Imie" type="text">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
            <label for="mName">Drugie Imie:*</label> 
              <input class="form-control input-sm" id="mName" name="mName"
              placeholder="Drugie Imie" type="text">
            </div>
          </div> 
       </div> 

        <div class="row">
          <div class="col-md-4">
           <div class="form-group">
            <label for="gender">Plec</label> 
              <select class="form-control input-sm" id="gender" name="gender">
                <option value="M">
                  Mezczyzna
                </option>

                <option value="F">
                  Kobieta
                </option>
              </select>
            </div>
          </div>

           <div class="col-md-4">
            <div class="form-group">
                <label for=
                "bday">Data Urodzin</label> 
                    <div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="11" type="text" value="" readonly name="bday" id="bday">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                     <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
              </div>
           </div>
          <div class="col-md-4">
      <div class="form-group">
            <label for="bplace">Miejsce Urodzin</label> 
              <input class="form-control input-sm" id="bplace" name="bplace"
              placeholder="Miejsce" type="text">
            </div>
          </div>
        </div> 
 
        <div class="row">
          <div class="col-md-4">
         <div class="form-group">
            <label for="status">Status Cywilny</label>
              <select class="form-control  " id="status" name="status">
                <option value="Single">
                  Singiel
                </option>

                <option value="Married">
                Zonaty/Zamezna
                </option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
            <label for="age">Wiek</label> 
              <input class="form-control input-sm" id="age" name="age" placeholder=
              "wiek" type="number">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
            <label for="nationality">Narodowosc</label> 
              <input class="form-control input-sm" id="nationality" name=
              "nationality" placeholder="Narodowsc" type="text">
            </div>
          </div>
        </div> 
 
        <div class="row">
          <div class="col-md-4">
         <div class="form-group">
            <label for="religion">Relligia</label> 
              <input class="form-control input-sm" id="religion" name="religion"
              placeholder="Religia" type="text">
            </div>
          </div>

          <div class="col-md-4">
         <div class="form-group">
            <label for="contact">Kontakt</label> 
              <input class="form-control input-sm" id="contact" name="contact"
              placeholder="Kontakt" type="text">
            </div>
          </div>

          <div class="col-md-4">
         <div class="form-group">
            <label for="email">Email*</label> 
              <input class="form-control input-sm" id="email" name="email"
              placeholder="Email address" type="email">
            </div>
          </div>
        </div> 

 
        <div class="row">
          <div class="col-md-8">
         <div class="form-group">
            <label  for="home">Dom</label> 
              <input class="form-control input-sm" id="home" name="home" placeholder=
              "Adres" type="text">
            </div>
          </div>
        </div> 
    </fieldset>

    <fieldset>
      <legend>Szczególy</legend>

        <div class="row">
          <div class="col-md-6">
             <div class="form-group">
            <label for="father">Ojciec</label> 
              <input class="form-control input-sm" id="father" name="father"
              placeholder="Ojciec" type="text">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
            <label for="fOccu">Zawód</label> 
              <input class="form-control input-sm" id="fOccu" name="fOccu"
              placeholder="zawod" type="text">
            </div>
          </div>
        </div> 

      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
           <div class="form-group">
            <label for="mother">Matka</label> 
              <input class="form-control input-sm" id="mother" name="mother"
              placeholder="Matka" type="text">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
            <label for="mOccu">Zawód</label> 
              <input class="form-control input-sm" id="mOccu" name="mOccu"
              placeholder="zawod" type="text">
            </div>
          </div>
        </div>
      </div>
 
        <div class="row">
          <div class="col-md-6">
            
          </div>

          <div class="col-md-6">
          
          </div>
        </div> 
 
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
            <label for="guardian">Opiekun</label> 
              <input class="form-control input-sm" id="guardian" name="guardian"
              placeholder="Opiekun" type="text">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
            <label for="guardianAdd">Adres</label> 
              <input class="form-control input-sm" id="guardianAdd" name=
              "guardianAdd" placeholder="Opiekuna Adres" type="text">
            </div>
          </div>
        </div> 
 
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
            
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
            <label for="otherAddress">Adres</label> 
              <input class="form-control input-sm" id="otherAddress" name=
              "otherAddress" placeholder="Adres" type="text">
            </div>
          </div>
        </div> 
    </fieldset>

    <fieldset>
      <legend></legend>

      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <label for="boarding"></label>

            <div class="col-md-8">
             
            </div>
          </div>
        </div>
      </div>
    </fieldset>

    <div class="form-group">
      <div class="row">
        <div class="col-md-6">
          <div class="col-md-6"></div>
        </div>

        <div class="col-md-6" style="text-align: right">
          <button class="btn btn-default" name="submit" type="submit">Zapisz</button>
        </div>
      </div>
    </div>
  </form>
</div><!==End of well-->
  <!--End of container-->

</div><!--End of container-->
              </div>
