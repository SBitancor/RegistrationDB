<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Javascript Demo</title>
</head>
<body>

  <form action="/data.php" method="get">
    <input type="text" name="fullName" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" 
	placeholder="Full Name">
    <input type="submit">  
  </form>
  
</body>
</html>