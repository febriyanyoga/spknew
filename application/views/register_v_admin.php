<div class="container">
<div class="col-md-4 col-md-offset-4 contact-grid" >	
<div class="box-body">
	 <h1>Register</h1>	
	 <?php echo form_open(base_url()."registerAdmin/") ?>	
	 <span><?php echo $captcha_return?><?php echo validation_errors()?></span>	

	 <div class="form-group" >	
	 	<label>Nama Anda : </label>
	 	<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama')?>" required/>	 
	 </div>

	  <div class="form-group" >
	 	 <label>Username :</label>	
	 	 <input type="text" class="form-control" name="username" value="<?php echo set_value('username') ?>" required/>		
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
      <label for="level"> Level :</label>
      <select class="form-control" name="level">
        <option value="admin"> admin</option>
        <option value="karyawan"> karyawan</option>
      </select>
    </div>

	  <!-- <div class="form-group">	
	 	 <label>Level :</label>		
 	 	 <input type="text"  class="form-control" name="level" value="<?php echo set_value('level')	?>" required	/>	
	 </div> -->

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