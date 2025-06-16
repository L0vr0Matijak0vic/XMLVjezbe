<?php
    $xml = simplexml_load_file('ljubimci.xml');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ljubimci</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Ime</th>
                <th>Vrsta</th> 
                <th>Starost</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($xml->ljubimac as $ljubimac): ?>
                <tr>
                    <td><?php echo $ljubimac->ime; ?></td>
                    <td><?php echo $ljubimac->vrsta; ?></td>
                    <td><?php echo $ljubimac->godine; ?></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>



<?php 
    $json = json_decode(file_get_contents("profesor.json"),true);
?> 
<!doctype html>
<html lang="hr">
<head>
    <meta charset="utf-8">
    <title>Podaci o predmetu</title>
</head>
<body>

    <div>Predmet:<?php echo $json->predmet?></div>
    <div>Profesor:<?php echo $json->profesor?></div>
    <div>ECTS:<?php echo $json->ects?></div>

</body>
</html>