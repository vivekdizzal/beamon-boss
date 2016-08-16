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
                    <li class="breadcrumb-current-item">Add Extra Material</li>
                </ol>
            </div>
        </header>
          <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">

<form action="<?php echo site_url('tooling/add_extra_material'); ?>" method="post">
	<h2>Extra Material in inch</h2>	
	<input type="text" name="extra_material_inch" />
	<input type="submit" name="add_extra_material_inch" value="Add Extra Material">
</form>

</div>