<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Forms</title>
  <meta name="author" content="Matthew Harrison-Jones">

</head>
<body>
  <div id="container">
   <form action="results.php" method="post">
   	<fieldset>
   		<h3>Text</h3>
   		<input type="text" name="text" placeholder="Some Text"/>
   		<h3>Radio</h3>
   		<label>Radio1</label><input type="radio" name="radioName" value="radio1" />
   		<label>Radio2</label><input type="radio" name="radioName" value="radio2" />
   		<h3>Checkbox</h3>
   		<label>Check1</label><input type="checkbox" name="checkName" value="check1" />
   		<label>Check2</label><input type="checkbox" name="checkName" value="check2" />
   		<h3>Checkbox Array</h3>
   		<label>Check1</label><input type="checkbox" name="checkA[]" value="check1" />
   		<label>Check2</label><input type="checkbox" name="checkA[]" value="check2" />
   		<h3>Hidden</h3>
   		<label>hidden</label><input type="hidden" name="hiddenName" value="ThisIsHidden" />
   		<br /> <!-- DO NOT USE <BR /> IN REAL LIFE PLEASE, USE CSS :D -->
   		<input type="submit" class="button" value="Submit"/>
   	</fieldset>
   </form>
  </div>
</body>
</html>