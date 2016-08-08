 
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
        <!-- /Topbar -->

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

        <div class="chute chute-center">

        <button type="button" class="btn btn-danger ph25">
            <a href="<?php echo site_url('tooling/add_material'); ?>">Add Material</a>
        </button>
 <div class="panel" id="spy3">

        <div class="panel-body pn">
                        <div class="table-responsive">
                            <table class="table datatable-index table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>QN#</th>
                                    <th>MATERIAL NAME</th>
                                    <th>MATERIAL DESCRIPTION</th>
                                    <th>COST</th> 
                                    <!--<th>STATUS</th>-->
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                    //php code here
                                    $sno = 1;
                                    if(!empty($result))
                                    {
                                        foreach ($result as $value) {
                                            # code...
                                            echo "<tr>";
                                            echo "<td>".$sno."</td>";
                                            echo "<td>".$value['material_name']."</td>";
                                            echo "<td>".$value['material_description']."</td>";
                                            echo "<td>".$value['cost']."</td>";
                                          //  echo "<td>".$value['material_name']."</td>";
                                            echo "<td><a href='".site_url('tooling/edit_material/'.$value['id'])."' id='edit' value='".$value['id']."' >Edit</a> | <a href='#' class='del' val='".$value['id']."'>Delete</a></td></tr>";
                                            $sno++;
                                        }
                                    }
                                ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    </div>
        </div>

        
        <!-- /Content -->

    <script type="text/javascript">
        $(".del").click(function() {
            var id = $(this).attr('val');
            var res=confirm("Do you want to delete?");
            if(res == true)
            {
                window.location = "<?php echo site_url(); ?>/tooling/delete_material/"+id;
            }       
        });
    </script>

       