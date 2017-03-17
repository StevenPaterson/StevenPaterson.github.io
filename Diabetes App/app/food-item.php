<?include 'php/connect.php';?>

<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <title>CarbCount</title>
</head>
<body>
  <div class="container">
    <div class="header">
      <a class="center-vertical float-left" href="carbohydrates.html"><img src="resources/arrow.svg"/></a>
      <a class="center-vertical float-right" href="index.html"><img src="resources/home.svg"/></a>
    </div>
    <div class="flex-container">
      <div class="spacing-5">
        <h1 style="font-size: 4vh; font-weight: normal;">Food Item</h1>
      </div>
      <div class="full-card">
        <div class="image-card">
          <img src="resources/food-images/fish-and-chips.png" class="center-vertical"/>
        </div>
        <div class="info-card flex-container">
          <div class="info">
            <p class="float-left clear-left remove-padding">Energy</p>
            <p class="float-right clear-right remove-padding"><?$query = "SELECT energy FROM food WHERE name = 'Bread'"; $result = mysql_query($query); $row = mysql_fetch_row($result); echo $row['id'];?></p>
            <p class="float-left clear-left remove-padding">Fat</p>
            <p class="float-right clear-right remove-padding"></p>
            <p class="float-left clear-left remove-padding">of which saturates</p>
            <p class="float-right clear-right remove-padding"></p>
            <p class="float-left clear-left remove-padding">Carbohydrate</p>
            <p class="float-right clear-right remove-padding"></p>
            <p class="float-left clear-left remove-padding">of which sugars</p>
            <p class="float-right clear-right remove-padding"></p>
            <p class="float-left clear-left remove-padding">Fibre</p>
            <p class="float-right clear-right remove-padding"></p>
            <p class="float-left clear-left remove-padding">Protein</p>
            <p class="float-right clear-right remove-padding"></p>
            <p class="float-left clear-left remove-padding">Salt</p>
            <p class="float-right clear-right remove-padding"></p>
          </div>
          <div class="info">
            <p class="float-left clear-left remove-padding">Insulin Required</p>
            <p class="float-right clear-right remove-padding"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
