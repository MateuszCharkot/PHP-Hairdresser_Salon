<div class="users edit">
	<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend style="text-align: center"><?php echo __('Edycja uzytkownika'); ?></legend>
		<?php
		echo $this->Form->input('username',array('label' => 'Nazwa uzytkownika'));
                echo $this->Form->input('password',array('label' => 'Haslo uzytkownika'));
		echo $this->Form->input('first_name',array('label' => 'Imie'));
		echo $this->Form->input('last_name',array('label' => 'Nazwisko'));
		echo $this->Form->input('email',array('label' => 'Email'));
		echo $this->Form->input('tel',array('label' => 'Telefon'));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Zapisz zmiany')); ?>
</div>


