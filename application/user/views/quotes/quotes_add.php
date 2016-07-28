 <!-- Main Wrapper -->
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
                    <li class="breadcrumb-current-item">New Quotes</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">

            	<div class="row">
    				<div class="col-sm-6">
    					<div class="form-group col-sm-8">
							<label for="select_engineer">Select Engineer</label>
							 <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="select_engineer">Select Engineer
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Engineer 1</a></li>
                                  <li><a href="#">Engineer 2</a></li>
                                  <li><a href="#">Engineer 3</a></li>
                                </ul>
                              </div>
						</div>
    				</div>
    				<div class="col-sm-6">
    					<div class="form-group col-sm-8">
							<label for="quote_number">Quote Ref#</label>
							<input type="text" class="form-control input-md" id="quote_number">
						</div>
    				</div>
   
 				</div>
 				<div class="row">
    				<div class="col-sm-6">
    					<div class="form-group col-sm-8">
							<label for="email_id">Email</label>
							<input type="text" class="form-control input-md" id="email_id">
						</div>

    				</div>
    				<div class="col-sm-6">
    					<div class="form-group col-sm-8">
							<label for="company">Company</label>
							<input type="text" class="form-control input-md" id="company">
						</div>
    				</div>
   
 				</div>
 				<div class="row">
    				<div class="col-sm-6">
    					<div class="form-group col-sm-8">
							<label for="email_cc">Email CC</label>
							<input type="text" class="form-control input-md" id="email_cc">
						</div>

    				</div>
    				<div class="col-sm-6">
    					<div class="form-group col-sm-8">
							<label for="customer">Customer</label>
							<input type="text" class="form-control input-md" id="customer">
						</div>
    				</div>
   
 				</div>
 				<div class="row">
    				<div class="col-sm-6">
    					<div class="form-group col-sm-8">
							<label for="email_alt">CC Email</label>
							<input type="text" class="form-control input-md" id="email_alt">
						</div>

    				</div>
    				<div class="col-sm-6">
    					<div class="form-group col-sm-8">
							<label for="assy_ref">Assy#</label>
							<input type="text" class="form-control input-md" id="assy_ref">
						</div>
    				</div>
   
 				</div>
            
            <p> Tooling </p>
            <p><a href="<?php echo base_url(); ?>quotes/add_tooling" class="btn btn-info" role="button">Create</a></p>


            </div>
            <!-- /Column Center -->

        </section>
        <!-- /Content -->
