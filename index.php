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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">



        <div class="card mt-5">
            <div class="card-body">
                <form action="" method="GET">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check-parking" id="check-parking"
                            <?= $filter_parking ? 'checked' : '' ?>>
                        <label class="form-check-label" for="check-parking">
                            Con parcheggio
                        </label>
                    </div>

                    <div class="mb-3">
                        <label for="filter-vote" class="form-label">Voto</label>
                        <input type="number" name="filter-vote" class="form-control" id="filter-vote" min="1" max="5">
                    </div>

                    <button class="btn btn-primary mx-2">submit</button>
                    <input type="reset" class="btn btn-warning mx-2" value="reset">riavvia</input>


                </form>
            </div>
        </div>


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
                <?php foreach ($hotels as $hotel): ?>
                    <tr class="">
                        <td class="border">
                            <?php echo $hotel["name"] ?>
                        </td>
                        <td class="border">
                            <?php echo $hotel["description"] ?>
                        </td>
                        <td class="border">
                            <?php echo $hotel['parking'] ? 'yes' : 'no' ?>
                        </td>
                        <td class="border">
                            <?php echo $hotel["vote"] ?>
                        </td>
                        <td class="border">
                            <?php echo $hotel["distance_to_center"] . " " . "km" ?>
                        </td>

                    </tr>
                <?php endforeach ?>

            </tbody>

        </table>
    </div>
</body>

</html>