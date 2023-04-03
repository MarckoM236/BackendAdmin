<?php require_once $_SERVER['DOCUMENT_ROOT'].PROJECT.'routes.php'; ?>
<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href=<?php echo PROJECT."home"?>><i class="menu-icon fa fa-laptop"></i>Inicio</a>
                    </li>
                    <li class="menu-title">Opciones</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Productos</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-id-badge"></i><a href=<?php echo PROJECT."products"?>>Productos</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href=<?php echo PROJECT."profile"?>><i class="menu-icon fa fa-table"></i>Perfil</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->