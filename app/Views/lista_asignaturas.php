
<div class="container">
    <div class="page-centered">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title panel-title-soporte">
                    <span class="fa fa-id-card pull-right"></span>
                    Mis datos
                </h3>
            </div>
            <div class="panel-body">
                <h4><span class="fa fa-graduation-cap"></span> <?php echo $nombre_estudiante; ?></h4>
                <h4><span class="fa fa-university"></span> <?php echo $carrera; ?></h4>
                <h4><span class="fa fa-user"></span> <?php echo $rut; ?></h4>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title panel-title-soporte">
                <span class="fa fa-list-ol pull-right"></span>
                Instrucciones
            </h3>
        </div>
        <div class="panel-body">
            <ol>
                <li>Identifica la asignatura que deseas evaluar.</li>
                <li>Presiona el icono <span class="glyphicon glyphicon-log-in"></span>.</li>
                <li>Serás redirigido a la encuesta.</li>
                <li>Si tienes más de un docente por asignatura, podrás evaluar a cada uno de ellos.</li>
                <li>Recuerda que lo que se evalúa mejora y mejorar es tarea de todos.</li>
                <li>Recuerda que tus respuestas son absolutamente confidenciales y an&oacutenimas.</li>
            </ol>
        </div>
    </div>
</div>


<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<i class="fa fa-list pull-right" aria-hidden="true"></i>
			Asignaturas inscritas
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<?php
                    echo $mis_asignaturas;
                ?>
			</div>
		</div>
	</div>
</div>
<div class="container">
    <div class="col-md-12 text-center">
        <a href="<?php echo base_url() ?>" class="btn btn-danger btn-sm" role="button">
            <i class="fa fa-undo" aria-hidden="true"></i>
            Volver
        </a>
    </div>
</div>