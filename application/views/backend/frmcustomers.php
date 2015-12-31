	<h3 class="tit"><?=$title;?></h3>
	<?php
	   $mode=$this->uri->segment(4);
	   if($mode=='insert'):
	   		$id ='';
	   		$nm_cat = '';
	   		$cp_tittle = '';
	   		$address = '';
	   		$city = '';
	   		$region = '';
	   		$postalcode = '';
	   		$country = '';
	   		$phone = '';
	   		$fax = '';
	   else :	   		
	   		$id = $customers->CustomerID;
	   		$nm_cat = $customers->CompanyName;
			$cp_tittle= $customers->ContactTitle;
			$address= $customers->Address;
			$city= $customers->City;
			$region= $customers->Region;
			$postalcode= $customers->PostalCode;
			$country= $customers->Country;
			$phone= $customers->Phone;
			$fax= $customers->Fax;
	   endif;		

	?>
			<!-- Table (TABLE) -->
			<br /><br />
			
      <form id="commentForm" name="commentForm"  method="post" action="<?=site_url('backend/customers/process/'.$mode.'/'.$id);?>">
      		<input type="hidden" name='id' value="<?=$id;?>">
      		<input type="hidden" name='mode' value="<?=$mode;?>">
			<fieldset>				
				<table class="nostyle">
					<tr>
						<td style="width:100px;">ID Customers:</td>
						<td><input type="text" value="<?=$id;?>" size="40" name="CustomerID" class="input-text" required="required" /></td>
					</tr>
					<tr>
						<td style="width:100px;">Company Name:</td>
						<td><input type="text" value="<?=$nm_cat;?>" size="40" name="CompanyName" class="input-text" required="required" /></td>
					</tr>	
					<tr>
						<td style="width:100px;">Contact Tittle:</td>
						<td><input type="text" value="<?=$cp_tittle;?>" size="40" name="ContactTitle" class="input-text" required="required" /></td>
					</tr>			
					<tr>
						<td class="va-top">Address:</td>
						<td><textarea cols="75" rows="7" required="required" name="Address" class="input-text"><?=$address;?></textarea></td>
					</tr>				
					<tr>
						<td class="va-top">City:</td>
						<td><input type="text" value="<?=$city;?>" size="40" name="City" class="input-text" required="required" /></td>
					</tr>				
					<tr>
						<td class="va-top">Region:</td>
						<td><input type="text" value="<?=$region;?>" size="40" name="Region" class="input-text" required="required" /></td>
					</tr>				
					<tr>
						<td class="va-top">Postal Code:</td>
						<td><input type="text" value="<?=$postalcode;?>" size="40" name="PostalCode" class="input-text" required="required" /></td>
					</tr>				
					<tr>
						<td class="va-top">Country:</td>
						<td><input type="text" value="<?=$country;?>" size="40" name="Country" class="input-text" required="required" /></td>
					</tr>				
					<tr>
						<td class="va-top">Phone:</td>
						<td><input type="text" value="<?=$phone;?>" size="40" name="Phone" class="input-text" required="required" /></td>
					</tr>				
					<tr>
						<td class="va-top">Fax:</td>
						<td><input type="text" value="<?=$fax;?>" size="40" name="Fax" class="input-text" required="required" /></td>
					</tr>						
					<tr>
						<td colspan="2" class="t-right">
							<input type="submit" name="btnSimpan"  class="input-submit" value="Submit" /></td>
					</tr>
				</table>
			</fieldset>
      </form>

		