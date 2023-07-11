<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM registro WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $expendiente = $row['expendiente'];
        $nombre = $row['nombre'];
        $matricula = $row['matricula'];
        $edad = $row['edad'];
        $edocivil = $row['edocivil'];
        $sexo = $row['sexo'];
        $domicilio = $row['domicilio'];
        $fecnac = $row['fecnac'];
        $telefono = $row['telefono'];
        $ocupacion = $row['ocupacion'];
        $l_o = $row['l_o'];
        $l_r = $row['l_r'];
        $t_r = $row['t_r'];
        $t_r = $row['t_r'];
        $escolaridad = $row['escolaridad'];
        $religion = $row['religion'];
        $consultas = $row['consultas'];
        $tiempo_tratamineto = $row['tiempo_tratamineto'];


    }
}
if (isset($_POST['modificar'])) {
    $id = $_GET['id'];
    $expendiente= $_POST['expendiente'];
    $nombre = $_POST['nombre'];
    
  
    $query = "UPDATE registro set expendiente = '$expendiente', nombre = '$nombre' WHERE id=$id";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'ACTUALIZADO';
    $_SESSION['message_type'] = 'warning';
    header('Location: index.php');
  }

?>
<?php include("includes/header.php") ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card-body">
                <form action="" class="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="expendiente" value="<?php echo $expendiente; ?>" class="form-control"
                            placeholder="Modificar">
                    </div>
                    <div class="form-group">
                        <textarea name="nombre" rows="3"><?php echo $nombre; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="matricula" rows="3"><?php echo $matricula; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="edad" rows="3"><?php echo $edad; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="edocivil" rows="3"><?php echo $edocivil; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="sexo" rows="3"><?php echo $sexo; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="domicilio" rows="3"><?php echo $domicilio; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="fecnac" rows="3"><?php echo $fecnac; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="telefono" rows="3"><?php echo $telefono; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="ocupacion" rows="3"><?php echo $ocupacion; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="l_o" rows="3"><?php echo $l_o; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="l_r" rows="3"><?php echo $l_r; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="t_r" rows="3"><?php echo $t_r; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="escolaridad" rows="3"><?php echo $escolaridad; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="religion" rows="3"><?php echo $religion; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="consultas" rows="3"><?php echo $consultas; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="tiempo_tratamineto" rows="3"><?php echo $tiempo_tratamineto; ?></textarea>
                    </div>
                    <button class="btn btn-success" name="modificar">
                        Modificar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>