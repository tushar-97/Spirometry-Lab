<html>
<head>
  <link rel="stylesheet" href="index-style.css">
</head>
<body style="background-color:#CAEBF2;">
  <!-- fdf3e7 CAEBF2 -->
  <div class="form-style-2">

  <div class="row">
  <div class="col">
  <div class="form-style-2-heading">PGI PFT LAB</div>
    <form action="insert.php" method="post">

    <label for="SNO"><span>SNO.<span class="required">*</span></span>
    <input type="number" min ="0" class="input-field" name="SNO" value="" /></label>

    <label for="NAME"><span>NAME<span class="required">*</span></span>
    <input type="text" class="input-field" name="NAME" value="" /></label>

    <label for="CRNO"><span>CRNO.<span class="required">*</span></span>
    <input type="text" class="input-field" name="CRNO" value="" /></label>

    <label for="AGE"><span>AGE <span class="required">*</span></span>
    <input type="number" step="1" class="input-field" name="AGE" value="" /></label>

    <label for="SEX"><span>SEX<span class="required">*</span></span>
    <input type="text" style="resize:none" class="input-field" name="SEX" value="" /></label>

    <label for="OPD"><span>OPD/WARD<span class="required">*</span></span>
    <textarea name="OPD" style="resize:none" class="textarea-field"></textarea></label>

    <label for="HEIGHT"><span>HEIGHT<span class="required">*</span></span>
    <input type="number" step="0.1" min="50" max="200" class="input-field" name="HEIGHT" value="" /></label>

    <label for="WEIGHT"><span>WEIGHT<span class="required">*</span></span>
    <input type="number" step="0.1" min="8" max="150" class="input-field" name="WEIGHT" value="" /></label>

    <label for="DIAGNOSIS"><span>DIAGNOSIS<span class="required">*</span></span>
    <textarea name="DIAGNOSIS" style="resize:none" class="textarea-field"></textarea></label>

    </div>
    <div class="col">
    <div class="form-style-2-heading">SPIROMETRY READINGS</div>
    <label for="FVC"><span>FVC<span class="required">*</span></span>
    <input type="number" step="0.01" class="input-field" name="FVC" value="" /></label>

    <label for="FEV1"><span>FEV1<span class="required">*</span></span>
    <input type="number" step="0.01" class="input-field" name="FEV1" value="" /></label>

    <label for="PEF"><span>PEF<span class="required">*</span></span>
    <input type="number" step="0.1" class="input-field" name="PEF" value="" /></label>

    <label for="FEF"><span>FEF<span class="required">*</span></span>
    <input type="number" step="0.1" class="input-field" name="FEF" value="" /></label>

    <label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
    <br/>
    </form>
    <div class="form-style-2-heading">SEARCH/PRINT RECORDS</div>
    <form action="search.php" method="post">

      <label for="CRNO"><span>CRNO.<span class="required">*</span></span>
      <input type="number" min ="0" class="input-field" name="CRNO" value="" /></label>

      <label for="DATE"><span>DATE<span class="required">*</span></span>
      <input type="date" class="input-field" name="DATE" value="" /></label>

      <label><span>&nbsp;</span><input type="submit" value="Search" /></label>

    </form>
  </div>
</div>
</div>
<!--
<div class="form-style-2">
  <div class="form-style-2-heading">SEARCH/PRINT RECORDS</div>
  <form action="search.php" method="post">
    <div class="row">
        <div class="col">
    <label for="CRNO"><span>CRNO.<span class="required">*</span></span>
    <input type="number" min ="0" class="input-field" name="CRNO" value="" /></label>

    <label for="DATE"><span>DATE<span class="required">*</span></span>
    <input type="date" class="input-field" name="DATE" value="" /></label>

    <label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
  </div>
</div>
</form>
</div>
-->

</body>
</html>
