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
                        <a href="<?php echo site_url(); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Add Material</li>
                </ol>
            </div>
        </header>
          <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">
<form action="<?php echo  site_url('tooling/add_material'); ?>" method="post">
<p>Material Name </p>
<input type="text" name="material_name" id="material_name" /></br>
<p>Material Description </p>
<input type="text" name="material_description" id="material_description" /></br>
<p>Material Cost </p>
<input type="text" name="material_cost" id="material_cost" /></br></br></br>
<input type="submit" value="Add Material" name="add_material" />

</form>
</div>



