<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
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

?>
<main>
    <div class="hotel-appiccicati">
        <?php var_dump($hotels) ?>
    </div>

    <div class="hotel-ordinati border border-1 w-75 m-auto">
        <?php 
        foreach ($hotels as $alberghi){
        ?>
    <table class="table">
  <thead>
    <tr class="border border-1">
        <?php 
            foreach ($alberghi as $comp => $dato){
        ?>
        <th class="border border-1" scope="col"><?php echo $comp ?></th>
        <?php } ?>
    </tr>
  </thead>
  <tbody>
    <tr>
    <!-- <?php 
            foreach ($alberghi as $comp => $dato){
        ?>
        
        <?php } ?> -->
        <th class="border border-1" scope="col"><?php echo $alberghi['name'] ?></th>
        <td class="border border-1"><?php echo $alberghi['description'] ?></td>
        <td class="border border-1"><?php echo $alberghi['parking'] ?></td>
        <td class="border border-1"><?php echo $alberghi['vote'] ?></td>
        <td class="border border-1"><?php echo $alberghi['distance_to_center'] ?></td>
    </tr>
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
        <?php } ?>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>