<!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">Faculty <span class="lite">Management</span></a>
            <!--logo end-->

           
            
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse content ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li>                     
                      <a class="" href="viewFaculty.php">
                          <i class="icon_pencil-edit"></i>
                          <span>View Faculty</span>
                          
                      </a>
                                         
                  </li>
				
                  
                  <li>
                      <a class="" href="addFaculty.php">
                          <i class="icon_contacts"></i>
                          <span>Add Faculty</span>
                      </a>
                  </li>
                    <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Maintenance</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Rank</a></li>                          
                          <li><a class="" href="form_validation.html">Subject</a></li>
                      </ul>
                  </li>       
                             
               
                  
              </ul>
              <?php
              $query = mysqli_query($con,"Select * from tblcurrentsem");
              $row= mysqli_fetch_object($query);?>
              <!-- sidebar menu end-->
              <form method="POST">
              <div class= "col-sm-12 col-xs-12 col-lg-9 col-md-9">
              <h4 style="color:white">Semester:</h4>
              <select name= "curSem" class = "form-control">
              <option value="1st" <?php if($row->strSem == '1st'){echo "selected";}?>>First</option>
             <option value="2nd" <?php if($row->strSem == '2nd'){echo "selected";}?>>Second</option>
              
              </select>
              </div>
              <div class= "col-sm-12 col-xs-12 col-lg-9 col-md-9" style="margin-bottom:5%">
              <h4 style="color:white">Year:</h4>
              <input name = "curYear" type = "text" class = "form-control" value = "<?php echo $row->strYear;?>">
              
              </div>
            <div class= "col-sm-12 col-xs-12 col-lg-9 col-md-9">
              <button type = "submit" name= "btnSaveSem" class = "btn btn-success btn-md" formnovalidate>Save</button>
              
              </div>
              <?php
              if(isset($_POST['btnSaveSem'])){
                $yr= $_POST['curYear'];
                $sem = $_POST['curSem'];
                mysqli_query($con,"Update tblcurrentsem set strSem = '$sem', strYear = '$yr' where intID= 1");
                echo "<meta http-equiv='refresh' content='0'>";
              }
              ?>
              </form>
          </div>
      </aside>
      <!--sidebar end-->