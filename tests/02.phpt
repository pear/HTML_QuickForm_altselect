--TEST--
2.phpt: Test multiple mode without other
--FILE--
<?php

require_once 'HTML/QuickForm.php';
require_once 'HTML/QuickForm/altselect.php';

$select =& HTML_QuickForm::createElement('altselect', 'test', null, array(
    'a' => 'A', 
    'b' => 'B', 
    'c' => 'C',
    ));
$select->setMultiple(true);
echo $select->toHtml();
?>
--EXPECTREGEX--
<input name=\"test\[\]\" type=\"checkbox\" value=\"a\" id=\"qf_([0-9a-zA-Z]+)\" \/><label for=\"qf_\1\">A<\/label><br \/>
<input name=\"test\[\]\" type=\"checkbox\" value=\"b\" id=\"qf_([0-9a-zA-Z]+)\" \/><label for=\"qf_\2\">B<\/label><br \/>
<input name=\"test\[\]\" type=\"checkbox\" value=\"c\" id=\"qf_([0-9a-zA-Z]+)\" \/><label for=\"qf_\3\">C<\/label>
