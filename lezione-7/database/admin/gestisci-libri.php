<?php
include 'config.php';

$query_libri = "SELECT * FROM libri";
$result_libri = $conn->query($query_libri);

//gestiamo l'eliminazione
if(isset($_POST['id'])) {
    $libro_id = $_POST['id'];

    $query_elimina = "DELETE FROM libri where id=$libro_id";
    if($conn->query($query_elimina)){
        header("Location: gestisci-libri.php"); //è importante perchè non aggiorna in automatico la pagina!!!!
        exit();
    } else {
        echo "errore!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'partials/menu.html' ?>
<a href="form-libro.php">Inserisci nuovo libro</a>
<table>
    <tr>
        <th>ID</th>
        <th>autore_id</th>
        <th>editore_id</th>
        <th>titolo</th>
        <th>prezzo</th>
        <th>Operazioni</th>
    </tr>
    <?php if($result_libri->num_rows > 0) {
            while($row = $result_libri->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['autore_id'] ?></td>
        <td><?php echo $row['editore_id'] ?></td>
        <td><?php echo $row['titolo'] ?></td>
        <td><?php echo $row['prezzo'] ?></td>
        <td>
            <a href="modifica-libro.php?id=<?php echo $row['id'] ?>">Modifica</a>
            <form action="gestisci-libri.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <input type="submit" value="Elimina" onclick="return confirm('Sei sicuro')">
            </form>
        </td>
    </tr>
    <?php } } else {
        echo "non ci sono record!";
    } ?>
</table>

<!-- CREATE TABLE `libri` (
  `id` bigint(20) NOT NULL,
  `autore_id` bigint(20) NOT NULL,
  `editore_id` bigint(20) NOT NULL,
  `titolo` varchar(40) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `anno` year(4) NOT NULL,
  `lingua` varchar(2) NOT NULL,
  `prezzo` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8; -->
    
</body>
</html>