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
                    <li class="breadcrumb-current-item">Edit Markup</li>
                </ol>
            </div>
        </header>
          <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">
<form action="<?php echo  site_url('tooling/edit_markup/'.$records[0]["id"]); ?>" method="post">
<p>Material Name </p>
<input type="text" name="markup_percentage" id="markup_percentage" value="<?php echo $records[0]['markup_percentage']; ?>" /></br>
<input type="submit" value="Update" name="edit_markup" />

</form>
</div>



