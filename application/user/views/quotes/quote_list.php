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
                    <li class="breadcrumb-current-item">Dashboard</li>
                </ol>
            </div>
        </header>

 <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">
                <!-- Pagination -->
                <div class="panel" id="spy3">
                    <div class="panel-heading">
                        <div class="dt-panelmenu clearfix">
							<div class="col-sm-4">
								<form class="form-inline" role="form">
								  <div class="form-group">
									<label>Company Name</label>
									<select class="form-control">
										<option>-- All Customers --</option>
										<option data-page-size="10">10</option>
										<option data-page-size="15">15</option>
									</select>
								  </div>
								 </form>
							</div>
							<div class="col-sm-5">
								<form class="form-inline" role="form">
								  <div class="form-group">
									<label>Order Status</label>
									<select class="form-control">
										<option>In Progress</option>
										<option data-page-size="10">10</option>
										<option data-page-size="15">15</option>
									</select>
								  </div>
								 </form>
							</div>
							</div>
                    </div>
                    <div class="panel-body pn">
                        <div class="table-responsive">
                            <table class="table datatable-index table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>QN#</th>
                                    <th>CREATED DATE</th>
                                    <th>CUSTOMER</th>
									<th>TOOLING REF#</th>
                                    <th>Stencil Ref#</th>
                                    <th>STATUS</th>
                                    <th>QTY</th>
									<th>TOTAL COST</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>30/07/2016</td>
                                    <td>HCL</td>
									<td>333tq001</td>
                                    <td>333ts001</td>
                                    <td>Active</td>
                                    <td>10</td>
									<td>$450</td>
                                </tr>
                              <?php
                                if(isset($records))
                                {
                                    $i=1;
                                    foreach($records as $record)
                                    {
                                        echo "<tr>";
                                        echo " <td>".$i."</td>";
                                        echo "<td>".$record['date_created']."</td>";
                                        echo "<td>".$record['company_id']."</td>";
                                        echo "<td>".$record['company_id']."</td>";
                                        echo "<td>".$record['company_id']."</td>";
                                        echo "<td>".$record['company_id']."</td>";
                                        echo "<td>".$record['company_id']."</td>";
                                        echo "<td>".$record['company_id']."</td>";
                                        echo "</tr>";
                                        $i++;
                                    }
                                } 



                              ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
				<div class="panel" id="pchart1">
                    <div class="panel-heading">
                        <span class="panel-title"> Sales</span>
                    </div>
                    <div class="panel-body bg-light dark">

                        <div id="high-column2" style="width: 100%; height: 430px; margin: 0 auto"></div>

                    </div>
                </div>

                <!-- DEMO Break -->
                <div class="mv40"></div>


            </div>
            <!-- /Column Center -->

        </section>

