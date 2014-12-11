
<?php echo $this->load->view('template/header.php');?>
	
<div class="container" id="body_home">
    <div class="row vertical-offset-100">
        <center><div class="col-md-4 col-md-offset-4" style="width:50%" border="0" alt="Null">
            <div class="modal-">
                <div class="panel-heading">                                
                    <div class="row-fluid user-row" style="margin-bottom:6%">
                        <img style="float:left" src="<?php echo base_url('/images/logo.png');?>" class="img-responsive" alt="Conxole Admin"/>
                    	<h1 style="padding-top:4%">Syntactics OJT's Daily Time Record</h1>
                    </div>
  	            </div>
		            <div class="panel-body">
		            <?php $attributes = array('role' => 'form','class' => 'form-signin', 'method' => 'POST');   
                		echo form_open('con_login/login',$attributes);?> 
			                <fieldset>
			                    <label class="panel-login">
			                        <div class="login_result"></div>
			                    </label>
			                    <input class="form-control" placeholder="Username" name="username" type="text">
			                    <input class="form-control" placeholder="Password" name="password" type="password">
			                    <br></br>
			                    <button class="btn btn-lg btn-success btn-block" type="submit" name="login_btn" id="login">Login &raquo;</button>
			                    <div class="errors"><span style="color:red"><?php echo validation_errors(); ?></span></div>
			                    <div class="errors"><span style="color:red"><?php if(isset($invalid)) echo $invalid; ?></span></div>
			                </fieldset>
		                <?php echo form_close();?>
		            </div>
        		</div>
    		</div>
		</div></center>
	</div>
</div>

<?php echo $this->load->view('template/footer.php');?>