 
 <section id="content_wrapper">

        <!-- Topbar -->
       
        <!-- /Topbar -->

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

        <div class="chute chute-center col-sm-12">

    <!--    <div class="action-button">
            <a class="btn-info" href="<?php echo site_url('tooling/add_markup'); ?>">Add Markup</a>
       </div> -->
 <div class="panel" id="spy3">

        <div class="panel-body pn">
                        <div class="table-responsive">
                            <table class="table datatable-index table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>QN#</th>
                                    <th>MARKUP</th>
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
                                            echo "<td>".$value['markup_percentage']."</td>";
                                            echo "<td><a href='".site_url('tooling/edit_markup/'.$value['id'])."' id='edit' value='".$value['id']."' >Edit</a></td></tr>";
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
                window.location = "<?php echo site_url(); ?>/tooling/delete_markup/"+id;
            }       
        });
    </script>

       