<body class="utility-page sb-l-c sb-r-c">

<!-- Body Wrap -->
<div id="main" class="animated fadeIn">

    <!-- Main Wrapper -->
    <section id="content_wrapper">

        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>

        <!-- Content -->
        <section id="content">

            <!-- Login Form -->
            <div class="allcp-form theme-primary mw320" id="login">
                <div class="bg-primary mw600 text-center mb20 br3 pt15 pb10">
                    <img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""/>
                </div> 
                <div class="panel mw320">

                    <form method="post" action="<?php echo site_url('welcome/dashboard'); ?>" id="form-login">
                        <div class="panel-body pn mv10">

                            <div class="section">
                                <label for="usr_logname" class="field prepend-icon">
                                    <input type="text" name="usr_logname" id="usr_logname" class="gui-input"
                                           placeholder="Username">
                                    <span class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->

                            <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <input type="password" name="usr_logpwd" id="usr_logpwd" class="gui-input"
                                           placeholder="Password">
                                    <span class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->

                            <div class="section">
                          
                                <button type="submit" class="btn btn-bordered btn-primary pull-right">Log in</button>
                            </div>
                            <!-- /section -->

                        </div>
                        <!-- /Form -->
                    </form>
                </div>
                <!-- /Panel -->
            </div>
            <!-- /Spec Form -->

        </section>
        <!-- /Content -->

    </section>
    <!-- /Main Wrapper -->

</div>