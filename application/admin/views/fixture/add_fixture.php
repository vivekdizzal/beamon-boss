

<form action="<?php echo site_url('tooling/add_fixture'); ?>" method="post">
	<h2>Name</h2>	
	<input type="text" name="fixture_name" />
	<h2>Description(optional)</h2>
	<input type="text" name="fixture_description" />
	<input type="submit" name="add_fixture" value="Add Fixture">
</form>