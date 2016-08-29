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
        <div class="" id="content">
            <div class="row">

                <div class="col-md-12">

                    <!-- Standard Fields -->
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title">New Quotes</span>
                        </div>
                        <div class="panel-body">

                            <form class="form-horizontal" action="<?php echo base_url('quotes/add_new_quotes'); ?>" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Engineer Name:</label>
                                            <div class="col-lg-9">
                                                <div class="">
                                                    <select class="form-control" name="engineer_id">
                                                        <option value="111">Engineer 1</option>
                                                        <option value="222">Engineer 2</option>
                                                        <option value="333">Engineer 3</option>
                                                        <?php
                                                            /* bring dynamic fields here*/

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="inputStandard">Email:</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="primary_email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="inputStandard">CC Email:</label>
                                            <div class="col-lg-9 append-text cc-append">
                                                <div class="appen-con"><input type="text" placeholder="Type Here..." class="form-control" id="inputStandard" name="secondary_email[]"><span><i class="fa fa-plus-square"></i></span><div class='clearfix'></div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="inputStandard">Quote Ref#:</label>
                                            <div class="col-lg-9">
                                                <p class="form-control-static text-muted"></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="inputStandard">Company:</label>
                                            <div class="col-lg-9">
                                                <input type="text" value="Test Company" class="form-control" name="company">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="inputStandard">Customer:</label>
                                            <div class="col-lg-9">
                                                <div class="">
                                                    <select class="form-control" name="customer">
                                                        <option value="133">Intel</option>
                                                        <option value="244">HCL</option>
                                                        <option value="355">Microsoft</option>
                                                    </select>

                                                    <?php
                                                        /* Bring dynamic fields here*/
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                      <!--   <div class="form-group">
                                            <label class="col-lg-3 control-label" for="inputStandard">Assy#:</label>
                                            <div class="col-lg-9">
                                                <input type="text" value="333444" class="form-control">
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="alert alert-dark pastel alert-dismissable text-center">
                                            <strong>Tooling</strong> 
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-6">
            
                                                </div>
                                                <div class="col-lg-6 pull-right text-right">
                                                    <button type="submit" class="btn btn-danger ph25">Create
                                                   </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
