<html>
<head>
  <link rel="stylesheet" href="insert-style.css">
</head>
<body style="background-color:#CAEBF2;">
<?php
error_reporting(E_ERROR);
$conn = new mysqli('localhost','root','');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn,"pft database");

$HEIGHT = $_POST['HEIGHT'];
$WEIGHT = $_POST['WEIGHT'];
$BSA = number_format((pow($HEIGHT,0.725)*pow($WEIGHT,0.425)*0.007184),2);

$FVC = $_POST['FVC'];
$FEV1 = $_POST['FEV1'];
$PEF = $_POST['PEF'];
$FEF = $_POST['FEF'];
$AGE = $_POST['AGE'];
$SEX = $_POST['SEX'];

  if($SEX == 2){
    $FVCPRED = number_format(($HEIGHT * 0.035) -2.05 -($AGE * 0.014) -($AGE * $AGE * 0.00004),2);
    $FVCLLN = number_format($FVCPRED - 0.735,2);


    $FEV1PRED = number_format(($HEIGHT * 0.027) -1.07 -($AGE * 0.03) +($AGE * $AGE * 0.00013),2);
    $FEV1LLN = number_format($FEV1PRED - 0.531,2);


    $RATPRED = number_format(111 -($AGE * 0.36) +($AGE * $AGE * 0.003) -($HEIGHT * 0.10),1);
    $RATLLN = number_format($RATPRED - 9.541,1);

    $PEFPRED = number_format(52.0 +($AGE * 1.5) -($AGE * $AGE * 0.04) +($HEIGHT * 2.1),1);
    $PEFLLN = number_format($PEFPRED - 83.895,1);

    $FEFPRED = number_format(23 -($AGE * 2.6) +($AGE * $AGE * 0.010) +($HEIGHT * 1.5),1);
    $FEFLLN = number_format($FEFPRED - 76.49,1);

  }
  else{
    $FVCPRED = number_format((($HEIGHT * 0.048) -3.44 -($AGE * $AGE * 0.00005) -($AGE * 0.013)),2);
    $FVCLLN = number_format($FVCPRED - 0.818,2);

    $FEV1PRED = number_format(($HEIGHT * 0.036) -1.9 -($AGE * 0.025) +($AGE * $AGE * 0.00006),2);;
    $FEV1LLN = number_format($FEV1PRED - 0.686,2);

    $RATPRED = number_format(103 -($AGE * 0.35) +($AGE * $AGE * 0.002) -($HEIGHT * 0.07),1);
    $RATLLN = number_format($RATPRED - 10.857,1);

    $PEFPRED = number_format(42.3 +($AGE * 5.0) -($AGE *$AGE * 0.08) +($HEIGHT * 2.4),1);
    $PEFLLN = number_format($PEFPRED - 90.475,1);

    $FEFPRED = number_format(59 -($AGE * 2.6) +($AGE * $AGE * 0.007) +($HEIGHT * 1.5),2);
    $FEFLLN = number_format($FEFPRED - 102.48,1);
  }

  $FVCPERC = number_format(($FVC*100/$FVCPRED),2);
  $FEV1PERC = number_format(($FEV1 * 100)/$FEV1PRED,2);
  $RAT = number_format((100 * $FEV1)/$FVC,1);
  $PEFPERC = number_format((100 *$PEF)/$PEFPRED,1);
  $FEFPERC = number_format((100 * $FEF)/$FEFPRED,1);


$sql="INSERT INTO pft (SNO,NAME,CRNO,AGE,SEX,OPD,HEIGHT,WEIGHT,BSA,DIAGNOSIS,
  FVC,FVCPRED,FVCLLN,FVCPERC,FEV1,FEV1PRED,FEV1LLN,FEV1PERC,
  RAT,RATPRED,RATLLN,PEF,PEFPRED,PEFLLN,PEFPERC,FEF,FEFPRED,FEFLLN,FEFPERC) VALUES
  ('$_POST[SNO]','$_POST[NAME]','$_POST[CRNO]','$_POST[AGE]','$_POST[SEX]','$_POST[OPD]',
  '$_POST[HEIGHT]','$_POST[WEIGHT]','$BSA',
  '$_POST[DIAGNOSIS]',
  '$_POST[FVC]','$FVCPRED','$FVCLLN','$FVCPERC',
  '$_POST[FEV1]','$FEV1PRED','$FEV1LLN','$FEV1PERC',
  '$RAT','$RATPRED','$RATLLN',
  '$_POST[PEF]','$PEFPRED','$PEFLLN','$PEFPERC',
  '$_POST[FEF]','$FEFPRED','$FEFLLN','$FEFPERC')";

if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully. Following values recorded";
    echo '
          <table style="border-collapse:collapse" align="centre" id="mytable">
          ';
          echo "
          <tr><td>FVC: $FVC</td><td>FVCPRED: $FVCPRED</td><td>FVCLLN: $FVCLLN</td><td>FVCPERC: $FVCPERC</td></tr>
          <tr><td>FEV1: $FEV1</td><td>FEV1PRED: $FEV1PRED</td><td>FEV1LLN: $FEV1LLN</td><td>FEV1PERC: $FEV1PERC</td></tr>
          <tr><td>RAT: $RAT</td><td>RATPRED: $RATPRED</td><td>RATLLN: $RATLLN</td></tr>
          <tr><td>PEF: $PEF</td><td>FVCPRED: $PEFPRED</td><td>PEFLLN: $PEFLLN</td><td>PEFPERC: $PEFPERC</td></tr>
          <tr><td>FEF: $FEF</td><td>FEFPRED: $FEFPRED</td><td>FEFLLN: $FEFLLN</td><td>FEFPERC: $FEFPERC</td></tr>
          </table>
          ";

}
else
{
    echo "Error! Please go back and check inputs";
}

mysqli_close($conn);
?>
<form action="index.php" method="post">
  <label><span>&nbsp;</span><input type="submit" value="Go Back" /></label>
</form>
</body>
</html>
