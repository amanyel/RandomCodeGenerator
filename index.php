<?php 
include('header.php');
?>
<body>
<br>
<br>
<br>

<div class="container" id="wrapper">
<?php
function RandomSourceCode() {
					$var = "abcdefghijkmnopqrstuvwxyz0123456789";
					srand((double)microtime()*1000000);
					$i = 0;
					$rand_Code = '' ;
					while ($i <= 7) {
						$num = rand() % 33;
						$tmp = substr($var, $num, 1);
						$rand_Code = $rand_Code . $tmp;
						$i++;
					}
					return $rand_Code;
				}
?>
<h1>
<?php
echo RandomSourceCode();
?>
</h1>
<br>
<a href="index.php" class="btn btn-primary">Refresh</a>
</div>

</body>
</html>