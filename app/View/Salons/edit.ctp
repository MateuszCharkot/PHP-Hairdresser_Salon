<div class="salon edit">
	<?php echo $this->Form->create('Salon'); ?>
	<fieldset>
		<legend style="text-align: center"><?php echo __('Edycja Salonu'); ?></legend>
		<?php
		echo $this->Form->input('name',array('label' => 'Nazwa salonu'));
		echo $this->Form->input('city',array('label' => 'Miasto'));
		echo $this->Form->input('adress',array('label' => 'Adres'));
		echo $this->Form->input('tel',array('label' => 'Numer kontaktowy'));
		echo $this->Form->input('email',array('label' => 'E-mail'));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Zapisz zmiany')); ?>
</div>


