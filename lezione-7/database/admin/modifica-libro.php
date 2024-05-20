<?php 
include 'config.php';
//controlli da fare
$libro_id = $_GET['id']; //quando il dato viene passato tramire url si prende con get
$query_libro = "SELECT * FROM libri where id=$libro_id";
$result_libro = $conn->query($query_libro);

if($result_libro->num_rows == 1) {
    $row = $result_libro->fetch_assoc();
    $titolo = $row['titolo'];
    //mi prendo tutti gli altri!
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

    <form action="modifica-libro.php" method="post">

        <div>
            <label for="titolo">Titolo</label>
            <input type="text" name="titolo" id="titolo" value="<?php echo $titolo ?>">
        </div>

    </form>
    
</body>
</html>