 <?php
 /*echo "<pre>";
 print_r($time_cost);
 exit;*/

 ?>

 <!-- Main Wrapper -->
    <section id="content_wrapper">

        <!-- Topbar -->
     <!--    <header id="topbar" class="alt">
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
        </header> -->

 <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">
                <!-- Pagination -->
                <div class="panel" id="spy3">
                    <div class="panel-body pn">
                     <p><b>Accessory Price</b></p>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>QN#</th>
                                    <th>ACCESSORY NAME</th>
                                    <th>ACCESSORY COST</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                foreach ($accessory_cost as $key => $value) {
                                	$key = $key+1;
									echo "<tr>
									    <td>".$key."</td>
									    <td>".$value['accessory_name']."</td>
									    <td>"."$".$value['accessory_cost']."</td>
										</tr>";
									}
                                ?>
                             
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
				<div class="panel" id="spy3">
                    <div class="panel-body pn">
                      <p><b>Material Price</b></p>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>QN#</th>
                                    <th>MATERIAL NAME</th>
                                    <th>MATERIAL DESCRIPTION</th>
                                    <th>MATERIAL COST</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($material_cost as $key => $value) {
                                	# code...
                                	$key = $key +1;
									echo "<tr>
										    <td>".$key."</td>
										    <td>".$value['material_name']."</td>
										    <td>".$value['material_description']."</td>
										    <td>"."$".$value['cost']."</td>
										 </tr>";
									
									}
                                ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <div class="panel" id="spy3">
                    <div class="panel-body pn">
                      <p><b>Time Price</b></p>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>QN#</th>
                                    <th>NAME</th>
                                    <th>TYPE</th>
                                    <th>COST</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($time_cost as $key => $value)
                                {
									$key = $key +1;                                   
                                        echo "<tr>
                                            <td>".$key."</td>
                                            <td>".$value['name']."</td>
                                            <td>".$value['design_complex']."</td>
                                            <td>"."$".$value['cost']."</td>
                                        </tr>";
                                    
                                }
                                ?>
                             
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <!-- DEMO Break -->
                <div class="mv40"></div>


            </div>
            <!-- /Column Center -->

        </section>

