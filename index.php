<?php 
include_once "./result.php"
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <table class="table mx-5 mt-5 border">
        <thead>
            <tr>
                <th class="scope border">Name</th>
                <th class="scope border">Description</th>
                <th class="scope border">Parking</th>
                <th class="scope border">Vote</th>
                <th class="scope border">Distance to Center</th>
            </tr>
        </thead>

        <tbody class="border">
            <?php foreach($hotels as $hotel) : ?>
            <tr class="">
                <td class="border"><?php echo $hotel["name"] ?> </td>
                <td class="border"><?php echo $hotel["description"]?> </td>
                <td class="border"><?php echo $hotel['parking'] ? 'yes':'no' ?> </td>
                <td class="border"><?php echo $hotel["vote"] ?> </td>
                <td class="border"><?php  echo $hotel["distance_to_center"] ." " ."km"?> </td>

            </tr>
            <?php endforeach ?>

        </tbody>

    </table>

</body>

</html>