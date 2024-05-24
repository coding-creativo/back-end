<?php
include 'config.php';
//controlli da fare
$libro_id = $_GET['id']; //quando il dato viene passato tramire url si prende con get
$query_libro = "SELECT * FROM libri where id=$libro_id";
$result_libro = $conn->query($query_libro);

if ($result_libro->num_rows == 1) {
    $row = $result_libro->fetch_assoc();
    $titolo = $row['titolo'];
    //mi prendo tutti gli altri!
    //************* aggiunto */
    $isbn = $row['isbn'];
    $autore_id = $row['autore_id'];
    $editore_id = $row['editore_id'];
    $anno = $row['anno'];
    $lingua = $row['lingua'];
    $prezzo = $row['prezzo'];
    //****************** */
} else {
    echo "Nessun libro trovato con questo ID.";
    exit();
}

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
    <h2>Modifica libro</h2>

    <!-- aggiunto -->
    <h3><?php
        $messaggio = $_GET['messaggio'];

        echo $messaggio;
        ?></h3>
    <!-- ************* -->

    <form action="update-libro.php" method="post">
        <!-- aggiunto  -->
        <input type="hidden" name="libro_id" value="<?php echo $libro_id; ?>">
        <!-- ********* -->
        <label for="titolo">Titolo:</label><br>
        <input type="text" id="titolo" name="titolo" value="<?php echo $titolo; ?>"><br>
        <!-- aggiunto  -->
        <label for="isbn">ISBN:</label><br>
        <input type="text" id="isbn" name="isbn" value="<?php echo $isbn; ?>"><br>
        <label for="anno">Anno:</label><br>
        <input type="text" id="anno" name="anno" value="<?php echo $anno; ?>"><br>
        <label for="lingua">Lingua:</label><br>
        <input type="text" id="lingua" name="lingua" value="<?php echo $lingua; ?>"><br>
        <label for="prezzo">Prezzo:</label><br>
        <input type="text" id="prezzo" name="prezzo" value="<?php echo $prezzo; ?>"><br>
        <label for="prezzo">Autore:</label><br>
        <select id="autore_id" name="autore_id">
            <?php
            // Query per recuperare tutti gli autori
            $query_autori = "SELECT id, nome, cognome FROM autori";
            $result_autori = $conn->query($query_autori);

            //*** AGGIUNGERE  */

            if ($result_autori->num_rows > 0) {
                while ($row_autore = $result_autori->fetch_assoc()) {
                    // generiamo le opzioni per il menù a discesa 
                    $selected = ($row_autore['id'] ===  $autore_id) ? 'selected' : "";
            ?>
                    <option value="<?php echo $row_autore['id']; ?>" <?php echo $selected ?>>
                        <?php echo $row_autore['nome']; ?> <?php echo $row_autore['cognome']; ?>
                    </option>
            <?php }
            }
            ?>
        </select><br>
        <label for="prezzo">Editore:</label><br>
        <select id="editore_id" name="editore_id">
            <?php
            // Query per recuperare tutti gli editori
            $query_editori = "SELECT * FROM editori";
            $result_editori = $conn->query($query_editori);

            while ($row_editore = $result_editori->fetch_assoc()) {
                // Genera le opzioni per il menu a discesa degli EDITORI
                $selected = ($row_editore['id'] == $editore_id) ? "selected" : "";
            ?>
                <option value="<?php echo $row_editore['id']; ?>" <?php echo $selected; ?>>
                    <?php echo $row_editore['denominazione']; ?>
                </option>
            <?php } ?>

        </select><br>

        <label for="categorie">Categorie:</label><br>
        <?php
        // Query per recuperare le categorie dalla tabella 'categorie'
        $query_categorie = "SELECT id, nome FROM categorie";
        $result_categorie = $conn->query($query_categorie);

        //devo recuperare da 1 a più categorie
        $categorie_selezionate = []; // array che serve a memorizzare gli ID delle categorie associate a quel libro

        if ($result_categorie->num_rows > 0) {
            //****** recupero le categorie associate a quel libro
            $query_categorie_libro = "SELECT categoria_id FROM libri_categorie WHERE libro_id = $libro_id";
            $result_categorie_libro = $conn->query($query_categorie_libro);
            if ($result_categorie_libro->num_rows > 0) {
                while ($row_categorie_libro = $result_categorie_libro->fetch_assoc()) {
                    $categorie_selezionate[] = $row_categorie_libro['categoria_id']; //[2,3,4]
                }
            }
            //****** creiamo le checkbox */
            while ($row_categoria = $result_categorie->fetch_assoc()) {
                $categoria_id = $row_categoria['id'];
                $categoria_nome = $row_categoria['nome'];
                //facciamo il checked
                $checked = in_array($categoria_id, $categorie_selezionate) ? "checked" : ""; ?>
                <!-- $checked può avere o valore checked oppure stringa vuota -->

                <input type="checkbox" id="categoria_<?php echo $categoria_id; ?>" name="categorie[]" <?php echo $checked ?> value="<?php echo $categoria_id; ?>">
                <label for="categoria_<?php echo $categoria_id; ?>"><?php echo $categoria_nome ?></label><br>

        <?php }
        }


        ?>
        <button type="submit">Salva Modifiche</button>
    </form>
    <?php // Chiudi la connessione al database
    $conn->close(); ?>
</body>

</html>