			<h1><?=$title;?></h1>

			<!-- Table (TABLE) -->
			<br />
			<?php
			   echo anchor(site_url('backend/customers/form/insert/'),'Add',' class="input-submit"');	
			?>
			<br />
			<table>
				<tr>
					<th>No</th>
					<th>Actions</th>					    
				    <th>Company Name</th>
				    <th>Address</th>				   				   
				</tr>
				<?php
					$no=0;
					foreach($array_categories as $row):	
					$id=$row->CustomerID;	
					$no++;	
					$css=($no%2==1)? '' : 'class="bg"';
				?>
				<tr <?=$css;?> >
					<td><?=$no;?>.</td>
				    <td><?=anchor(site_url('backend/customers/process/delete/'.$id),'[delete]').' | '.
				    	   anchor(site_url('backend/customers/form/update/'.$id),'[update]');?></td>				    
				    <td><?=$row->CompanyName;?></td>
				    <td><?=$row->Address;?></td>				    
				</tr>
				<?php  endforeach; ?>
			</table>

		