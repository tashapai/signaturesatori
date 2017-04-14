<html>
<head>
</head>
<body>
<?php 
$count = 0; 
if ($handle = opendir('.')) { 
    while (false !== ($file = readdir($handle))) { 
        if ($file != "." && $file != "..") {$count++; 
            print("<a href=\"".$file."\">".$file."</a><br />\n"); 
        } 
    } 
echo '<br /><br /><a href="..">Return</a>'; 
    closedir($handle); 
} 
?>
</body>
</html>