<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>

             
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ADD Leads</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <!--Custommmer form validation system!-->
		                  <?php if(validation_errors()){

		                ?>

		                  <div class="alert alert-danger">
		                      <?php echo validation_errors();?>
		                  </div>
		                <?php 
		                 }?>
                    <?php echo form_open('leads/leads_info_check');?>
                    
                    	<div class="form-horizontal form-label-left">

                   
                      <span class="section">Leads Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Creation Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="date" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="date" placeholder="y/m/d" type="date">
                        </div>
                      </div>
                      <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="opportunity">Opportunity <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="opportunity" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="opportunity" placeholder="" type="text">
                        </div>
                      </div> -->

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Company Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Company Name" type="text"> -->
                          <select id="name" name="name" class="form-control col-md-7 col-xs-12">
                            <?php 
                                if(count($contactdata>0)){
                                  foreach ($contactdata as $team) {
                                    echo '<option  value="'.$team->company.'">'.$team->company.'</option>';
                                  }
                                }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contact">Contact Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input id="contact " class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="contact" placeholder="" type="text"> -->
                          <select id="contact" name="contact" class="form-control col-md-7 col-xs-12">
                            <?php 
                                if(count($contactdata>0)){
                                  foreach ($contactdata as $team) {
                                    echo '<option  value="'.$team->contactp.'">'.$team->contactp.'</option>';
                                  }
                                }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="country">Country<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input id="country " class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="country" placeholder="Country" type="text"> -->
                            <select name="country" id="country" class="form-control col-md-7 col-xs-12">
                              <option value="bangladesh">Bangladesh</option>
                            </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input type="email" id="email" name="email" class="form-control col-md-7 col-xs-12"> -->
                             <select id="email" name="email" class="form-control col-md-7 col-xs-12">
                            <?php 
                                if(count($contactdata>0)){
                                  foreach ($contactdata as $team) {
                                    echo '<option  value="'.$team->email.'">'.$team->email.'</option>';
                                  }
                                }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"> Phone Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="pnumber" data-validate-minmax="10, 15" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="teammm">Sales Team <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input id="teammm" type="text" name="teammm" data-validate-length-range="" class="optional form-control col-md-7 col-xs-12"> -->
                          <select id="teammm" name="teammm" class="optional form-control col-md-7 col-xs-12">
                            <?php 
                                if(count($salest>0)){
                                  foreach ($salest as $team) {
                                    echo '<option  value="'.$team->salesname.'">'.$team->salesname.'</option>';
                                  }
                                }
                            ?>
                          </select>
                        </div>
                      </div>
                   
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="telephone" name="tphone" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Addres <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <textarea id="textarea"  name="addres" class="form-control col-md-7 col-xs-12"></textarea> -->
                          <select id="addres" name="addres" class="form-control col-md-7 col-xs-12">
                            <?php 
                                if(count($contactdata>0)){
                                  foreach ($contactdata as $team) {
                                    echo '<option  value="'.$team->company.'">'.$team->company.'</option>';
                                  }
                                }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      </div>
                     <?php echo form_close();?>
                    
                    <!--Custommmer form validation system!-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

    


