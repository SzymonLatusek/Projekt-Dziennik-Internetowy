  <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/school.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <h1 class="line-bottom">Dziennik Elektroniczny</h1>
            </div>
            <div class="col-lg-5 ml-auto"> 
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 pr-md-5 mr-auto">
            <h2 class="line-bottom">Zaloguj</h2>
            <p>Strona dla Studenta</p>
          </div>
          <div class="col-md-6">
            <div class="quick-contact-form bg-white">
                <h2>Informacje Logowania</h2>
                <hr/>
               <span class="fa fa-user"> </span> <label><?Php echo $_SESSION['FNAME'];?></label><br/>
               <span class="fa fa-cog"> </span> <label><?Php echo $_SESSION['LNAME'];?></label><br/>
               <hr/>
                  <div class="form-group">
                <a href="logout.php" class="btn btn-primary px-5">Wyloguj <span class="fa fa-log-out"></span></a>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>