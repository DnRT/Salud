
<div class="container">
    <div class="col-sm-6 col-md-12" style="margin-top: 10px;">
        <div class="thumbnail">
            <img src="<?php echo base_url('assets/images/banner_encdocente_2019_azul.jpg'); ?>" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>

<div class="row container"></div>
<div class="container">
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-exclamation" aria-hidden="true"></i>
                Autentificación
            </div>
            <div class="panel-body">
                <!-- Ayuda -->
                <div class="panel panel-group panel-default" id="accordion">
                    <div style="user-select: auto;">
                        <div class="panel-ayuda panel-heading">
                            <h3 class="panel-title panel-title-soporte">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed" aria-expanded="false">
                                    <span class="glyphicon glyphicon-question-sign pull-right"></span>
                                    Ayuda
                                </a>
                            </h3>
                        </div>

                        <div id="collapseOne" class="panel-collapse collapse" style="user-select: auto; height: 0px;" aria-expanded="false">
                            <div class="panel-body panel panel-default" style="user-select: auto;">
                                <div class="panel panel-success" style="user-select: auto;">
                                    <div class="panel-heading" style="user-select: auto;">¿Cuál es tu Usuario?</div>
                                    <div class="panel-body" style="user-select: auto;">
                                        <p style="user-select: auto;text-align: justify;">
                                            Tu usuario es tu Rut sin puntos ni dígito verificador.
                                            Ejemplo: Si tu Rut es 12345678-9 tu usuario es 12345678.
                                            Luego pulsa Ingresar y podrás acceder al listado de asignaturas. 
<br/>Si a&uacuten no tienes Rut, ingresa el mismo identificador que utilizas para identificarte en el Portal Acad&eacutemico.
                                        </p>
                                    </div>
                                </div>

                            <div class="panel panel-success visible-xs" style="user-select: auto;">
                                <div class="panel-heading" style="user-select: auto;">Consultas</div>
                                    <div class="panel-body" style="user-select: auto;">
                                        <p style="user-select: auto;">
                                             Ante cualquier duda, contáctenos a través del correo electrónico
                    <a href="mailto:  encuestas.postgrados@uv.cl">encuestas.postgrados@uv.cl</a>
                    o llamando al <a href="tel:+56 32 260 3102">32 260 3102</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h5 class="text-justify">
                        <b>Para conocer tu listado de rotaciones, es necesario que accedas a esta plataforma:</b></h5>
                </div>

                <div class="input-group">
                    <span class="input-group-addon ">
                        <i class="fa fa-user"></i>
                    </span>
                    <!-- enviar rut / formulario para recibir asignaturas -->
                    <?php 
                        echo form_open('/encuesta');
                        $rut = array(
                            'name' => 'rut',
                            'placeholder' => 'Usuario',
                            'class' => 'form-control',
                            'maxlength'=> '8',
                            'minlength'=> '6',
                            'type' => 'text',
                            'onkeypress'=>'return isNumberKey(event)',
                            'required' => 'required'
                        );
                        echo form_input($rut);
                    ?>
                </div>
                <div style="margin:1% 0 1% 0;">
                    <span class="text-muted small">El usuario es su Rut sin puntos ni dígito verificador.</span>
                </div>
                <?php
                    echo form_submit('', 'Ingresar', "class='btn btn-success btn-block'");
                    echo form_close();
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-1 hidden-xs"></div>

    <div class="container col-md-5 visible-xs">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title panel-title-soporte">
                    <span class="glyphicon glyphicon-info-sign pull-right"></span>
                    Confidencialidad
                </h3>
            </div>
            <div class="panel-body">
                Nunca entregaremos a través de ningún
                medio información detallada al académico acerca del estudiante y sus repuestas.
            </div>
        </div>
    </div>
    <div class="col-md-5 hidden-xs">
        <div class="well well-lg">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title panel-title-soporte">
                        <span class="glyphicon glyphicon-info-sign pull-right"></span>
                        Confidencialidad
                    </h3>
                </div>
                <div class="panel-body">
                    Nunca entregaremos a través de ningún
                    medio información detallada al académico acerca del estudiante y sus repuestas.
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title text-danger">
                        <span class="glyphicon glyphicon-exclamation-sign pull-right color-rojo"></span>
                        Tus respuestas
                    </h3>
                </div>
                <div class="panel-body">
                    Esta encuesta es de carácter anónimo y confidencial. La información entregada es anónima y
                    será utilizada a nivel agregado para mejorar la docencia.
                    <br>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title panel-title-soporte">
                        <span class="glyphicon glyphicon-info-sign pull-right"></span>
                        Consultas
                    </h3>
                </div>
                <div class="panel-body">
                    Ante cualquier duda, contáctenos a través del correo electrónico
                    <a href="mailto:encuestas.postgrados@uv.cl">encuestas.postgrados@uv.cl</a>
                    o llamando al <a href="tel:+56 32 260 3102">32 260 3102</a>.
                </div>
            </div>
        </div>
    </div>
</div>
