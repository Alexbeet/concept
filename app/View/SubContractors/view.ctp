<div class="row-fluid">

	<div class="span3">
	<h3><?php echo h($subContractor['SubContractor']['company_name']); ?></h3>
	<p><strong>Category:</strong> <?php echo $this->Html->link($subContractor['SubContractorCategory']['category'], array('controller' => 'sub_contractor_categories', 'action' => 'view', $subContractor['SubContractorCategory']['id'])); ?></p>

		<strong>Office Phone:</strong><?php echo h($subContractor['SubContractor']['office_phone']); ?>
		<br />
		<br />
		<strong>Address</strong><br />
		<?php echo h($subContractor['SubContractor']['address_1']); ?><br />
		<?php echo h($subContractor['SubContractor']['address_2']); ?><br />
		<?php echo h($subContractor['SubContractor']['address_3']); ?><br />
		<?php echo h($subContractor['SubContractor']['town']); ?><br />
		<?php echo h($subContractor['SubContractor']['county']); ?><br />
		<?php echo h($subContractor['SubContractor']['postcode']); ?>
	</div>
	


</div>

<div class="row-fluid marginTop20">

	<div class="span12">
	<?php echo $this->Html->link('Add new contact', array('controller' => 'sub_contractor_contacts', 'action' => 'add', $subContractor['SubContractor']['id'])); ?>
	</div>


<div class="table table-striped span12">

<table>


<tr>

<th>
Name
</th>

<th>
Job Title
</th>

<th>
Mobile
</th>

<th>
Email
</th>

</tr>
<?php foreach ($subContractorContacts as $contact):?>
<tr>

	<td>
	<?php echo $contact['SubContractorContact']['title'];?> <?php echo $contact['SubContractorContact']['first_name'];?> <?php echo $contact['SubContractorContact']['last_name'];?>
	</td>
	
		<td>
	<?php echo $contact['SubContractorContact']['position'];?>
	</td>
	
	<td>
	<?php echo $contact['SubContractorContact']['mobile_phone'];?>
	</td>
	
	<td>
	<?php echo $contact['SubContractorContact']['email'];?>
	</td>

</tr>
<?php endforeach;?>
</table>

</div>

</div>