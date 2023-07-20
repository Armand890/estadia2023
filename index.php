<?php include('db.php') ?>

<?php include("includes/header.php") ?> <!--para modificar encabezado-->
<div class="container-fluid">

    <div class="row">
        <div class="col-md-3 position-absolute top-20 start-20%">

            <?php if (isset($_SESSION['message'])) { ?>

                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            
                <?php session_unset();
            } ?>

            <div class="card card-body">
                <form action="guardar.php" method="POST">


                    <div class="form-group">
                        <input type="text" name="expendiente" class="form-control" placeholder="Numero de expediente"
                            aotufocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" aotufocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="matricula" class="form-control" placeholder="Matricula" aotufocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="edad" class="form-control" placeholder=" Edad" aotufocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="edocivil" class="form-control" placeholder=" Edo.Civil" aotufocus>
                    </div>
                    <div class="form-group">

                        <input type="text" name="sexo" class="form-control" placeholder="Sexo" aotufocus>
                    </div>
                    <div class="form-group">

                        <input type="text" name="domicilio" class="form-control" placeholder="Domicilio" aotufocus>
                    </div>
                    <div class="form-group">

                        <input type="text" name="fecnac" class="form-control" placeholder="Fec.Nac" aotufocus>
                    </div>
                    <div class="form-group">

                        <input type="text" name="telefono" class="form-control" placeholder="Telefono" aotufocus>
                    </div>
                    <div class="form-group">

                        <input type="text" name="ocupacion" class="form-control" placeholder="Ocupacion" aotufocus>
                    </div>
                    <div class="form-group">

                        <input type="text" name="l_o" class="form-control" placeholder="L.O." aotufocus>
                    </div>
                    <div class="form-group">

                        <input type="text" name="l_r" class="form-control" placeholder="L.R" aotufocus>
                    </div>
                    <div class="form-group">

                        <input type="text" name="t_r" class="form-control" placeholder="T.R" aotufocus>
                    </div>
                    <div class="form-group">

                        <input type="text" name="escolaridad" class="form-control" placeholder="Escolaridad" aotufocus>
                    </div>
                    <div class="form-group">

                        <input type="text" name="religion" class="form-control" placeholder="Religion" aotufocus>
                    </div>
                    <div class="form-group">

                        <input type="text" name="consultas" class="form-control"
                            placeholder="Consultas psicologicas anteriores" aotufocus>
                    </div>
                    <div class="form-group">

                        <input type="text" name="tiempo_tratamineto" class="form-control"
                            placeholder="T. De tratamiento" aotufocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="Guardar_datos" value="Guardar datos">
                </form>
            </div>

        </div>
      

             
        <div class="col-md-5">
            <table class="table table-bordered">
                <thead>
            
                    <tr>
                        <th>Fecha</th>
                        <th>No.expediente</th>
                        <th>Nombre completo</th>
                        <th>Matricula</th>
                        <th>Edad</th>
                        <th>Edo.Civil</th>
                        <th>Sexo</th>
                        <th>Domicilio</th>
                        <th>Fec.Nac</th>
                        <th>Telefono</th>
                        <th>Ocupacion</th>
                        <th>L.O.</th>
                        <th>L.R.</th>
                        <th>T.R.</th>
                        <th>Escolaridad</th>
                        <th>Religion</th>
                        <th>Consultas psicologicas anteriores</th>
                        <th>T. De tratamiento</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM registro";
                    $result_registros = mysqli_query($conn, $query);


                    while ($row = mysqli_fetch_array($result_registros)) { ?>
                        <tr>
                            <td>
                                <?php echo $row['fecha'] ?>
                            </td>
                            <td>
                                <?php echo $row['expendiente'] ?>
                            </td>
                            <td>
                                <?php echo $row['nombre'] ?>
                            </td>
                            <td>
                                <?php echo $row['matricula'] ?>
                            </td>
                            <td>
                                <?php echo $row['edad'] ?>
                            </td>
                            <td>
                                <?php echo $row['edocivil'] ?>
                            </td>
                            <td>
                                <?php echo $row['sexo'] ?>
                            </td>
                            <td>
                                <?php echo $row['domicilio'] ?>
                            </td>
                            <td>
                                <?php echo $row['fecnac'] ?>
                            </td>
                            <td>
                                <?php echo $row['telefono'] ?>
                            </td>
                            <td>
                                <?php echo $row['ocupacion'] ?>
                            </td>
                            <td>
                                <?php echo $row['l_o'] ?>
                            </td>
                            <td>
                                <?php echo $row['l_r'] ?>
                            </td>
                            <td>
                                <?php echo $row['t_r'] ?>
                            </td>
                            <td>
                                <?php echo $row['escolaridad'] ?>
                            </td>
                            <td>
                                <?php echo $row['religion'] ?>
                            </td>
                            <td>
                                <?php echo $row['consultas'] ?>
                            </td>
                            <td>
                                <?php echo $row['tiempo_tratamineto'] ?>
                            </td>
                            <td>
                                 <a href="editar.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>


                        </tr>

                    <?php } ?>
                </tbody>
        </div>

    </div>

</div>

<?php include("includes/footer.php") ?>