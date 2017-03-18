
<!DOCTYPE html>
<head>
<title> iOT testing </title>
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="row">
	<h1> This is a testing for the GPIO</h1>
	<br>

	<form method="get" action="index.php">
                <input class="btn btn-lg btn-success" type="submit" value="ON" name="on">
                <input class="btn btn-lg btn-danger" type="submit" value="OFF" name="off">
         </form>
         <?php
         $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
         if(isset($_GET['on'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
                 echo "LED is on";
         }
         else if(isset($_GET['off'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
                 echo "LED is off";
         }
         ?>
</div>
</body>