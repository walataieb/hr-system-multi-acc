<div id="navbar" class="navbar navbar-fixed-top"> <!--originale navbar-default-->
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="logon.php" class="navbar-brand">
                <small>
                    <img src="img/favicon/favicon-32x32.png" class="img img-circle" style="width:24px; height:24px; background-color:#fff;" />
                    HR-ECO  <span class='label label-warning arrowed arrowed-right'>Soc. attiva: ECO</span>						</small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                                                                                                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="img/favicon/favicon-32x32.png" style=" background-color:#fff; width:24px; height:24px;" alt="" />
                        <span class="user-info">
                            <small>myPage</small>
                        </span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="prf.php?spg=prf1" data-tooltip='tooltip' title='cambia la password'>
                                <i class="ace-icon fa fa-user-o green"></i>
                                Password
                            </a>
                        </li>
                        <li>
                            <a href="prf.php?spg=prf2"data-tooltip='tooltip' title='Centri di costo abilitati'>
                                <i class="ace-icon fa fa-creative-commons blue"></i>
                                Centri di costo
                            </a>
                        </li>
                        
                        <li class="divider"></li>

                        <li>
                            <a href="logout.php" data-tooltip='tooltip' title='esci dal programma'>
                                <i class="ace-icon fa fa-sign-out red"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>