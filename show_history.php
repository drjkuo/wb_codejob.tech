<h2>Product browsing history</h2>
<ul>
	<?php 
	$cookie = $_COOKIE['recentviews'];
    $cookie = unserialize($cookie);
    foreach($cookie as $v){ ?>
    <!--li><a href="<?php echo $v;?>"><?php echo $v;?></a></li-->
    <?php
	switch ($v) {
    case "/founder_2hr.php":
        echo "Founder of Code Job (2hr) <br>";
        break;
    case "/founder_4hr.php":
        echo "Founder of Code Job (4hr) <br>";
        break;
    case "/founder_8hr.php":
        echo "Founder of Code Job (8hr) <br>";
        break;
    case "/senior_2hr.php":
        echo "Senior engineer (2hr) <br>";
        break;
    case "/senior_4hr.php":
        echo "Senior engineer (4hr) <br>";
        break;
    case "/senior_8hr.php":
        echo "Senior engineer (8hr) <br>";
        break;
    case "/manager_2hr.php":
        echo "Engineer manager (2hr) <br>";
        break;
    case "/manager_4hr.php":
        echo "Engineer manager (4hr) <br>";
        break;
    case "/manager_8hr.php":
        echo "Engineer manager (8hr) <br>";
        break;
    case "/lead_2hr.php":
        echo "Tech lead (2hr) <br>";
        break;
    case "/lead_4hr.php":
        echo "Tech lead (4hr) <br>";
        break;
    case "/lead_8hr.php":
        echo "Tech lead (8hr) <br>";
        break;
	}
?>
    
    
    
    
    
    <?php } ?>
</ul>