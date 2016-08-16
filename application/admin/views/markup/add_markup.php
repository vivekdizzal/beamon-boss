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
                    <li class="breadcrumb-current-item">Add Markup</li>
                </ol>
            </div>
        </header>
          <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">
<form action="<?php echo  site_url('tooling/add_markup'); ?>" method="post">
<p>Add Markup Percentage </p>
<input type="text" name="markup_percentage" id="markup_percentage" /></br>
<input type="submit" value="Add Markup" name="add_markup" />

</form>
</div>



