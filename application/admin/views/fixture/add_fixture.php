 <section id="content_wrapper">               
      
        <!-- Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-icon">
                        <a href="index.html">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Add Fixture</li>
                </ol>
            </div>
        </header>
          <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">

<form action="<?php echo site_url('tooling/add_fixture'); ?>" method="post">
	<h2>Name</h2>	
	<input type="text" name="fixture_name" />
	<h2>Description(optional)</h2>
	<input type="text" name="fixture_description" />
	<input type="submit" name="add_fixture" value="Add Fixture">
</form>

</div>