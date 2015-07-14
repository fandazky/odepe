<html>
<head>
<title>My Form</title>
</head>

<body>

<?php echo form_open('register/register_form'); ?>

<h5>username</h5><input type="text" name="username" value="<?php echo set_value('username');?>" size="50" />
<?php echo form_error('username'); ?>

<h5>NIK</h5><input type="text" name="nik" value="<?php echo set_value('nik');?>" size="50" />
<?php echo form_error('nik'); ?>

<select name="level">
    <option selected="selected" class="hide-select">-- Pilih Hak Akses --</option>
    <option value="1">Admin</option>
    <option value="2">Operator</option>
</select>                                

<h5>Password</h5><input type="password" name="passwd" value="<?php echo set_value('passwd');?>" size="50" />
<?php echo form_error('passwd'); ?>

<h5>Nama Depan</h5><input type="text" name="namadepan" value="<?php echo set_value('namadepan');?>" size="50" />
<?php echo form_error('namadepan'); ?>

<h5>Nama Belakang</h5><input type="text" name="namabelakang" value="<?php echo set_value('namabelakang');?>" size="50" />
<?php echo form_error('namabelakang'); ?>

<h5>Alamat</h5><textarea rows="2" name ="address" value="<?php echo set_value('address');?>" ></textarea>
<?php echo form_error('email'); ?>

<select name="area">
    <option selected="selected" class="hide-select">-- Pilih Area Kerja --</option>
    <?php 
        foreach ($areakerja as $area) {
            echo "<option value=\"".$area->id_area."\">".$area->nama_area."</option>";
        }
    ?>
                                    
</select> 
<input type="submit" value="Submit" />
</form>
</body>
</html>