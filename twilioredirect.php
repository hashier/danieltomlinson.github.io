<?php
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<Response><Dial>" . ($_REQUEST['Digits'] == 1 ? "07851335666" : ($_REQUEST['Digits'] == 2 ? "07519817363" : "07934726875")) . "</Dial></Response>";
?>
