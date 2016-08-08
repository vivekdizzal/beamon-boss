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
                    <li class="breadcrumb-current-item">Edit Accessory</li>
                </ol>
            </div>
        </header>
          <section id="content" class="table-layout animated fadeIn">
            <!-- Column Center -->
            <div class="chute chute-center">

				<form action="<?php echo site_url('tooling/edit_accessories/'.$get_record[0]['id']); ?>" method="post">
				<h2>Name</h2>
				<input type="text" name="accessory_name" id="accessory_name" value="<?php echo $get_record[0]['accessory_name']; ?>" />
				<h2>Quantity</h2>
				<input type="text" name="accessory_qty" id="accessory_qty" value="<?php echo $get_record[0]['accessory_qty']; ?>" />
				<h2>Cost</h2>
				<input type="text" name="cost" id="cost" value="<?php echo $get_record[0]['accessory_cost']; ?>" />

				<input type="submit" name="edit_accessory" id="edit_accessory" value="Update" />
				</form>
		</div>