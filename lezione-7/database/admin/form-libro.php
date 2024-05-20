<?php
include 'config.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'partials/menu.html' ?>
    <h2>Form per l'inserimento di un nuovo libro!</h2>
    <form action="insert-libro.php" method="post">
        <div>
            <label for="titolo">Titolo: </label>
            <input type="text" name="titolo" id="titolo">
        </div>
        <div>
            <label for="autore_id">Autore</label>
            <!-- select con gli autori selezionati dalla tabella autori -->
            <select name="autore_id" id="autore_id">
                <?php
                $query_autori = "SELECT id, nome, cognome FROM autori";
                $result_autori = $conn->query($query_autori);
                if ($result_autori->num_rows > 0) {
                    while ($row_autore = $result_autori->fetch_assoc()) { ?>
                        <option value="<?php echo $row_autore['id'] ?>"><?php echo $row_autore['id'] ?> <?php echo $row_autore['nome'] ?> <?php echo $row_autore['cognome'] ?></option>
                <?php }
                }
                ?>
                <!-- <input type="text" name="autore_id" id="autore_id"> -->

            </select>
        </div>
        <div>
            <label for="editore_id">Editore</label>
            <select name="editore_id" id="editore_id">
                <?php
                $query_editori = "SELECT id, denominazione FROM editori";
                $result_editori = $conn->query($query_editori);
                if ($result_editori->num_rows > 0) {
                    while ($row_editore = $result_editori->fetch_assoc()) { ?>
                        <option value="<?php echo $row_editore['id'] ?>"><?php echo $row_editore['id'] ?> <?php echo $row_editore['denominazione'] ?></option>
                <?php }
                }
                ?>

            </select>
        </div>
        <div>
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn">
        </div>
        <div>
            <label for="anno">Anno</label>
            <input type="text" name="anno" id="anno">
        </div>
        <div>
            <label for="lingua">Lingua</label>
            <input type="text" name="lingua" id="lingua">
        </div>
        <div>
            <label for="prezzo">Prezzo</label>
            <input type="number" name="prezzo" id="prezzo">
        </div>
        <div>
            <label for="categorie">Categorie</label><br>
            <?php
            $query_categorie = "SELECT * FROM categorie";
            $result_categorie = $conn->query($query_categorie);
            if ($result_categorie->num_rows > 0) {
                while ($row_categoria = $result_categorie->fetch_assoc()) { ?>
                <input type="checkbox" id="categoria_<?php echo $row_categoria['id']; ?>" value="<?php echo $row_categoria['id']; ?>">
                <label for="categoria_<?php echo $row_categoria['id']; ?>"><?php echo $row_categoria['nome']; ?></label>

            <?php }
            }
            ?>
        </div>

        <div>
            <input type="submit" value="Inserisci il libro">
        </div>

    </form>
</body>

</html>

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