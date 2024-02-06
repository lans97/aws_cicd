<?php
$link = mysql_connect('localhost', 'lanns', 'securepass')
    or die("Failed to connect to mysql host: " . mysql_error());
echo 'Connected to mysql host';
mysql_select_db('arquiweb') or die("Failed to select database");

$query = 'SELECT user FROM mysql.user';
$result = mysql_query($query) or die('Error on query: ' . mysql_error());

echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "<tr>\n";
    foreach ($line as $col_value) {
        echo "<td>$col_value</td>\n";
    }
    echo "<-tr>\n";
}
echo "</table>\n";

mysql_free_result($result);

mysql_close($link);
?>
