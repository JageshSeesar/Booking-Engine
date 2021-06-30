<!-- // for a in range(1,14):
//     for b in range(0,9):
//         for c in range(0,6):
//             for d in range(0,4):
//                 print(str(a) + ', ' + str(b) + ', ' + str(c) + ', ' + str(d)) -->
<!DOCTYPE HTML>
<html>
<style>
.test{
    text-align:left;
    
}
select {
  width: 50%;
  padding: 12px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;

}
input[type=submit] {
  width: 75%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
body{
    text-align: center;
}
form{
    display: inline-block;
    width: 25%;
    padding: 10px 50px;
    background-color: #2B3856;
    border-radius: 10px;
    text-align: center;
    color:white
}
</style>
<head>
</head>
<body>
  <?php
  $max_adult = $max_child = $max_pax = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $max_adult = ($_POST["max_adult"]);
    $max_child = ($_POST["max_child"]);
    $max_pax = ($_POST["max_pax"]);
  }
  ?>
  <h2>Occupancy Calculator</h2>
  <form method="post" action="<?php echo  ($_SERVER["PHP_SELF"]); ?>">
    Maximum Adults:
    <br>
    <select id="max_adult" name="max_adult">
      <?php for ($i = 1; $i < 11; $i++) {
        echo '<option value="' . $i . '" ';
        if ($max_adult == $i) {
          echo 'selected = "selected"';
        }
        echo '>' . $i . '</option>';
      }
      ?>
    </select>
    <br><br>
    Max Children:
    <br>
    <select id="max_child" name="max_child">
    <?php for ($i = 1; $i < 11; $i++) {
        echo '<option value="' . $i . '" ';
        if ($max_child == $i) {
          echo 'selected = "selected"';
        }
        echo '>' . $i . '</option>';
      }
      ?>
    </select>
    <br><br>
   Max Pax:
   <br>
    <select id="max_pax" name="max_pax">
    <?php for ($i = 1; $i < 11; $i++) {
        echo '<option value="' . $i . '" ';
        if ($max_pax == $i) {
          echo 'selected = "selected"';
        }
        echo '>' . $i . '</option>';
      }
      ?>
    </select>
    <br><br>
    <input type="submit" name="find" value="Generate Combination">
  </form>
  <h2>Result</h2>
  <p>&#10060; &rarr; Exceeding Max Pax</p>
<!-- function combinations(array $elements){if (count($elements) <= 1) {yield $elements; } else {
        foreach (combinations(array_slice($elements, 1)) as $combination) {
            foreach (range(0, count($elements) - 1) as $i) {yield array_merge(array_slice($combination, 0, $i),[$elements[0]],array_slice($combination, $i));}}}}
$list = [$max_adult, $max_child, $max_pax];
foreach (combinations($list) as $combination) {echo implode(',', $combination)."<br>";} -->
<div name = "test">
<form>
<?php  
    for ($x = 1; $x <= $max_adult; $x++) {
        for ($y = 1; $y <= $max_child; $y++){	
                $sum=$x+$y;
                $a =  $x."A ".$y."C". " &rarr; Max Pax = $sum";
                if ($sum <= $max_pax){
                    echo $a."<br>";
                } else{
                    echo $a."&#10060;"."<br>";
                }
        }
    }
?>  
<form>
</div>
</body>
</html>