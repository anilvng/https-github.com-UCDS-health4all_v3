<link rel="stylesheet" href="<?php echo base_url();?>assets/css/metallic.css" >
<script type="text/javascript" src="<?php echo base_url();?>assets/js/zebra_datepicker.js"></script>
<script type="text/javascript">
$(function(){
	$("#warranty_start_date,#warranty_end_date").Zebra_DatePicker();
	$("#supply_date").Zebra_DatePicker({
		onSelect : function(date){
		$("#warranty_start_date").val(date);
		}
	});
	$("#department").on('change',function(){
		var department_id=$(this).val();
		$("#unit option,#area option").hide();
		$("#unit option[class="+department_id+"],#area option[class="+department_id+"]").show();
	});
});
</script>
<center>
<?php if(isset($msg)){  ?>
	<div class="alert alert-info"><?php echo $msg; ?>
	</div>
<?php } ?>
			
	<h3>Edit Item Details</h3>
</center></br>
<center>
	
	<?php 
		if(!$this->input->post('navigate_edit'))
			echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
</center>
	<?php 
	echo form_open('consumables/item/edit',array('class'=>'form-group','role'=>'form','id'=>'edit_item')); ?></center>
	
	<div class="col-xs-4 col-md-offset-3">
		<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4>Item ID: <?= $item->item_id; ?> <input type="hidden" class="sr-only" name="item_id" id="item_id" value="<?= $item->item_id;?>"></h4>
					<br>
				</div>
			</div>
		<div class="container">
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">		<!--Item name-->
					<div class="form-group">
						<label for="item_name">Item name<font style="color:red">*</font></label>
						<input type="text" class="form-control" placeholder="Enter Item Name" value="<?= $item->item_name;?>" id="item_name" name="item_name" required/>
					</div>
				</div>													<!--end of Item name-->
	
			<div class="form-group">									<!--Generic name-->
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<label for="generic_item"> Generic name<font color='red'>*</font></label>
					<select name="generic_item" id="generic_item" class="form-control" required>
						<option value="">Select</option>
						<?php foreach($generic_item as $d){
							if($d->generic_item_id === $item->generic_item_id)
								echo "<option value='$d->generic_item_id' selected>$d->generic_name</option>";
							else
								echo "<option value='$d->generic_item_id'>$d->generic_name</option>";
						}?>
					</select>
				</div>
			</div>														<!--end of Generic name-->
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">			<!--Item form-->
				<div class="form-group">
					<label for="item_form" >Item form<font style="color:red">*</font></label>
					<select name="item_form" id="item_form" class="form-control" required>
						<option value="">Select</option>
						<?php foreach($item_form as $d){
							if($d->item_form_id === $item->item_form_id)
								echo "<option value='$d->item_form_id' selected>$d->item_form</option>";
							else
								echo "<option value='$d->item_form_id'>$d->item_form</option>";
						}?>
					</select>
				</div>
			</div>														<!--end of Item form-->
	
	<div class="col-xs-12 col-sm-12 col-md-6  col-lg-3">				<!--Description-->
		<div class="form-group">
			<label for="Inputdescription">Description</label>
			<textarea class="form-control" name="description" rows="2"  placeholder="Enter Description about Item Name"><?= $item->description;?></textarea>
		</div>
	</div>																<!--end of Description-->
</div>
</div>
<div class="container">													<!--Model-->		 
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<div class="form-group">
				<label for="model">Model</label>
				<input type="text" class="form-control" placeholder="Enter Model" id="model" name="model" value="<?= $item->model; ?>" />
			</div>
		</div>	
	</div>
</div>																	<!--end of Model-->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<center><button class="btn btn-md btn-primary" type="submit" value="submit">Submit</button></center><!--Submit button-->
		</div><!--Submit button end-->
	</div>
</div>
</div>
</div>
</div>