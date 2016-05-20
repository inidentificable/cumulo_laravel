<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <nav class='sidebar sidebar-menu-collapsed'>
                <ul class='level1'>
                    <li class='active'><a class='expandable' href='#' title='Home'>
                            <span class='glyphicon glyphicon-home collapsed-element'></span>
                            <span class='expanded-element'>HOME</span>
                        </a>
                        <ul class='level2'>
                            <li><a href='#' title='Mis Licitaciones'>Mis Licitaciones</a></li>
                            <ul class='level3'>
                                <li><a href='#' title='Agrupate'>Agrupate</a></li>
                                <li><a href='#' title='Proyectos'>Proyectos</a></li>
                                <li><a href='#' title='Licitaciones'>Licitaciones</a></li>
                            </ul>
                        </ul>
                        <ul class='level2'>
                            <li><a href='#' title='Mis Ofertas'>Mis Ofertas</a></li>
                            <ul class='level3'>
                                <li><a href='#' title='Ofertas'>Ofertas</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li><a class='expandable' href='#' title='Mercado'>
                            <span class='glyphicon glyphicon-globe collapsed-element'></span>
                            <span class='expanded-element'>Mercado</span>
                        </a>
                    </li>
                    <li><a class='expandable' href='#' title='Invitaciones'>
                            <span class='glyphicon glyphicon-star collapsed-element'></span>
                            <span class='expanded-element'>Invitaciones</span>
                        </a>

                    </li>

            </nav>
        </div>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Dashboard</h1>

        <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
                <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                <h4>Label</h4>
                <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
                <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
                <h4>Label</h4>
                <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
                <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                <h4>Label</h4>
                <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
                <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
                <h4>Label</h4>
                <span class="text-muted">Something else</span>
            </div>
        </div>
        <?php
        $navegacion = new InterfaceCumulo('cumulocl_demo', 'P2l141987', 'localhost', 'cumulocl_demo');
        $navegacion->preguntarTabla('*', 'EMPRESA');
        ?>
    </div>
</div>
</div>