 <section id="content_wrapper">

        <!-- Topbar -->
        <!-- <header id="topbar" class="alt">
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
                    <li class="breadcrumb-current-item">Extra Material</li>
                </ol>
            </div>
        </header> -->
        <!-- /Topbar -->

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

        <div class="chute chute-center col-sm-12">

       <!--  <div class="action-button">
            <a class="btn-info" href="<?php echo site_url('tooling/add_extra_material'); ?>">Add Extra Material</a>
        </div> -->
        <div class="panel" id="spy3">
        <div class="panel-body pn">
                        <div class="table-responsive">
                        <?php echo $this->session->flashdata('response'); ?>

                            <table class="table datatable-index table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>QN#</th>
                                    <th>EXTRA MATERIAL IN INCH</th>
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

                                ?>
                                      
                                        <tr>
                                           <td><?php echo $sno; ?></td>
                                           <td><?php echo $value['extra_material_inch']; ?></td>
                                           <td><a href="<?php echo site_url('tooling/edit_extra_material/'.$value['id']); ?>" id='edit' value='<?php echo $value["id"]; ?>' >Edit</a></td>

                                    <?php
                                            $sno++;
                                            echo "</tr>";

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
        $(".delete").click(function() {
            var id = $(this).attr('value');
            var res=confirm("Do you want to delete?");
            if(res == true)
            {
                window.location = "<?php echo site_url(); ?>/tooling/delete_extra_material/"+id;
            }       
        });
    </script>
   

       