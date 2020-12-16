<?php



$q = "SELECT DISTINCT nromesa
      FROM pedidos 
      WHERE idCierreDeMesa <=>NULL";

$result = mysqli_query($conexion, $q);

//mostrar mesas ocupadas (con pedidos y sin cierre de mesa)

foreach($result as $row){ ?>
    
    <a href="info-mesa.php?mesa=<?php echo $row['nromesa']; ?>">
        <?php echo "Mesa  ".$row['nromesa']; ?>
    </a><br>
    
<?php } ?>


