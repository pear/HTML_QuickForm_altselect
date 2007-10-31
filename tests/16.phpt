--TEST--
1.phpt: Test singular mode, applying html attributes to 1 option
--FILE--
<?php

require_once 'HTML/QuickForm.php';
require_once 'HTML/QuickForm/altselect.php';

$select =& HTML_QuickForm::createElement('altselect',
    'test',
    null,
    array('a' => 'A', 'b' => 'B', 'c' => 'C'),
    array('a' => array('class' => 'test'))
    );
echo $select->toHtml();
?>
--EXPECTREGEX--
<input name=\"test\" value=\"a\" type=\"radio\" id=\"qf_([0-9a-zA-Z]+)\" class=\"test\" \/><label for=\"qf_\1\">A<\/label><br \/>
<input name=\"test\" value=\"b\" type=\"radio\" id=\"qf_([0-9a-zA-Z]+)\" \/><label for=\"qf_\2\">B<\/label><br \/>
<input name=\"test\" value=\"c\" type=\"radio\" id=\"qf_([0-9a-zA-Z]+)\" \/><label for=\"qf_\3\">C<\/label>
