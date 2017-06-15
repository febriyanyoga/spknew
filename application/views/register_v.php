<div class="container">
<div class="col-md-4 col-md-offset-4 contact-grid" >	
<div class="box-body">
	 <h1>Register</h1>	
	 <?php echo form_open(base_url()."register/") ?>	
	 <span><?php echo $captcha_return?><?php echo validation_errors()?></span>	

	 <div class="form-group" >	
	 	<label>ID KTP : </label>
	 	<input type="text" class="form-control" name="id_ktp" value="<?php echo set_value('id_ktp')?>" required/>	 
	 </div>

	 <div class="form-group" >
	 	 <label>Email :</label>	
	 	 <input type="text" class="form-control" name="email" value="<?php echo set_value('email') ?>" required/>		
	 </div>	

	 <div class="form-group">	
	 	 <label>Password:</label>	
 	 	 <input type="password" class="form-control" name="password"	value="<?php echo set_value('password')	?>" required	/>	
	 </div>

	 <div class="form-group">	
	 	 <label>Ulangi Password:</label>		
 	 	 <input type="password"  class="form-control" name="passconf" value="<?php echo set_value('passconf')	?>" required	/>	
	 </div>

	 <div class="form-group">
	 	 <label>Ketik Captcha berikut:	</label>
	 	 <div class="form-group">
	 	 	<?php echo $cap_img;?>
	 	 </div>	
	 	 <input type="text" class="form-control" name="captcha" value=""/>	
	 </div>	
	 <div class="form-group">	
	 	 <input type="checkbox" name="terms" value="1" <?php echo set_checkbox('terms',	'1');?>/>Saya setuju tentang Terms of Service dan Privacy Policy aplikasi ini	
	 </div>	
	 <div class="form-group">	
	 	 <input type="submit" value="Register" name="submit"/>	
	 </div>	
	 <?php echo form_close()?>	
</div>	
</div>
</div>