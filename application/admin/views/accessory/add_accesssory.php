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
                    <li class="breadcrumb-current-item">Add Accessory</li>
                </ol>
            </div>
        </header>
          <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">


<form action="<?php echo site_url('tooling/add_accessories'); ?>" method="post">
<h2>Name</h2>
<input type="text" name="accessory_name" id="accessory_name" />
<h2>Quantity</h2>
<input type="text" name="accessory_qty" id="accessory_qty" />
<h2>Cost</h2>
<input type="" name="cost" id="cost" />

<input type="submit" name="add_accessory" id="add_accessory" value="Add Accessories" />
</form>

</div>