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

                            <form class="form-horizontal" action="" method="">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Engineer Name:</label>
                                            <div class="col-lg-9">
                                                <div class="">
                                                    <select class="form-control">
                                                        <option>Engineer 1</option>
                                                        <option>Engineer 2</option>
                                                        <option>Engineer 3</option>
                                                        <?php
                                                            /* bring dynamic here*/

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="inputStandard">Email:</label>
                                            <div class="col-lg-9">
                                                <input type="text" value="test@test.com" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="inputStandard">CC Email:</label>
                                            <div class="col-lg-9 append-text cc-append">
                                                <div class="appen-con"><input type="text" placeholder="Type Here..." class="form-control" id="inputStandard"><span><i class="fa fa-plus-square"></i></span><div class='clearfix'></div></div>
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
                                                <input type="text" value="Test Company" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="inputStandard">Customer:</label>
                                            <div class="col-lg-9">
                                                <div class="">
                                                    <select class="form-control">
                                                        <option>Intel</option>
                                                        <option>HCL</option>
                                                        <option>Microsoft</option>
                                                    </select>

                                                    <?php
                                                        /* Bring dynamic here*/
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="inputStandard">Assy#:</label>
                                            <div class="col-lg-9">
                                                <input type="text" value="333444" class="form-control">
                                            </div>
                                        </div>
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
                                                    <button type="submit" class="btn btn-danger ph25">
                                                    <a href="tooling-quotes.html">Create</a></button>
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
