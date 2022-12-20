<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

$hotelFiltred = [];
// var_dump($_GET);

if (isset($_GET["parking"]) || isset($_GET["vote"])) {
    foreach ($hotels as $hotel) {
        if (isset($_GET["parking"]) && str_contains(strtolower($hotel["name"]), strtolower($_GET["parking"]))){
            $hotelFiltred[] = $hotel;
        }
    }
} else {
    $hotelFiltred = $hotels;
}


    // foreach($hotels as $hotel){
    //     echo "<div> {$hotel['name']} </div>";
    // }

?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Hotel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="container mt-5">
        <div class="row justify-content-center align-items-center">

            <!-- form container -->
            <div class="col-md-6 mt-3">

                <form action="" method="GET" class="d-flex gap-3 m-3 flex-wrap">

                    <div class="flex-fill">
                        <label class="text-white" for="">Parking slot</label>
                        <input class="form-control" type="text" name="parking" value="<?php echo $_GET["name"] ?? '' ?>">
                    </div>

                    <div class="flex-fill">
                        <label class="text-white" for="">Vote Ratings</label>
                        <input class="form-control" type="text" name="vote" value="<?php echo $_GET["name"] ?? '' ?>">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-warning m-1" >Press</button>
                        <button class="btn btn-info m-1" type="reset">Reset</button>
                    </div>

                </form>
            </div>


            <!-- table container  -->
            <div class="col-md-6 mt-3">
                <table class="table table-dark table-hover w-100">
                    <thead class="">
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Parking</th>
                            <th>Vote</th>
                            <th>Distance to center</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($hotelFiltred as $hotel){
                            echo "<tr>";
    
                                echo "<td> {$hotel['name']} </td>";
                                echo "<td> {$hotel['description']} </td>";
                                echo "<td> {$hotel['parking']} </td>";
                                echo "<td> {$hotel['vote']} </td>";
                                echo "<td> {$hotel['distance_to_center']} </td>";

                            echo "<tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- fine table container  -->
            
        </div>
    </main>
</body>
</html>

