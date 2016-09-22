<h1> member  Login </h1>
<fieldset>
<?php echo validation_errors();?>

<p style="color:red;"><?php echo $this->session->flashdata('notification')?></p>

<?php echo form_open('publik/login')?>
	username: <input type="text" name="username" value="<?php echo set_value('username')?>" required/> </br></br>
	password: <input type="password" name="password" value="<?php echo set_value('password')?>" required/> </br></br>
	
	<input type="submit" name="masuk" value="Log in" /> </br>
</form>
</fieldset>