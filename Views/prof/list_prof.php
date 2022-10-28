<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Profs</title>
</head>
<body>
    <h1 style="text-align:center">Liste des profs</h1>
    <table style="margin:auto" border="1">
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>email</th>
        </tr>
        <?php foreach($data_to_insert as $key => $value) : ?> 
            <tr>
                <td><?= $value[ID] ?></td>
                <td><?= $value[name] ?></td>
                <td><?= $value[email] ?></td>
                <td><a href="#">Modifier</a></td>
                <td><a href="#">Supprimer</a></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
