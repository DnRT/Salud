<div class="container page-centered">
    <div class = "col-md-12">
        <div class = "alert alert-danger">
            <strong>Error al buscar asignaturas!</strong><br/> El rut ingresado no contiene registros. Por favor presione volver e inténtelo nuevamente.
        </div>
        <div class = "thumbnail" style = "border: 0px;">
            <div class = "caption">
                <h1 class = "text-center">Ups!</h1>
                <p class = "text-center">¡Algo ha salido mal. Por favor, revisa los datos ingresados!</p>
            </div>
            <img src = "<?php echo base_url('assets/images/error_cloud.png'); ?>" alt = "Algo salio mal">
            <p class = "text-center">Si el error persiste por favor contáctese vía correo electrónico a
                <a href="mailto:direccion.postgrado@uv.cl">direccion.postgrado@uv.cl</a>
            </p>
        </div>
    </div>
</div>

<div class = "container">
	<div class="text-center">
		<a href="<?php echo base_url() ?>" class="btn btn-danger btn-sm" role="button">
			<i class="fa fa-undo" aria-hidden="true"></i>
			Volver
		</a>
	</div>
</div>