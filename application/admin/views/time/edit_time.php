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
                    <li class="breadcrumb-current-item">Dashboard</li>
                </ol>
            </div>
        </header>
          <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">
		<form action="<?php echo site_url('tooling/edit_time/'.$records[0]["id"]); ?>" method="post">
			<h2>Name</h2>
			<input type="text" name="name" id="name" value="<?php echo $records[0]['name']; ?>" readonly />
            <h2>Design Type</h2>
            <input type="text" name="design_type" id="design_type" value="<?php echo $records[0]['design_complex']; ?>" readonly />
			<h2>Cost (Per hour)</h2>
			<input type="text" name="cost" id="cost" value="<?php echo $records[0]['cost']; ?>" />
			<input type="submit" value="Update Time" id="edit_time" name="edit_time" />
		</form>
</div>