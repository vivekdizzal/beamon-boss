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
<form action="<?php echo site_url('tooling/edit_material/'.$get_record[0]['id']); ?>" method="post">
<input type="text" name="material_name" id="material_name" value="<?php echo $get_record[0]['material_name']; ?>"/></br>
<input type="text" name="material_description" id="material_description" value="<?php echo $get_record[0]['material_description']; ?>" /></br>
<input type="text" name="material_cost" id="material_cost" value="<?php echo $get_record[0]['cost']; ?>" />
<input type="submit" value="Edit Material" name="add_material" />

</form>

</div>

