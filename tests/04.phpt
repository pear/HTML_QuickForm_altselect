--TEST--
4.phpt: Test multiple mode with other
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
$select->setIncludeOther(true);
echo $select->toHtml();
?>
--EXPECTREGEX--
\<input name\="test\[\]" type\="checkbox" value\="a" id\="qf_([0-9a-z]+)" \/\>\<label for\="qf_\1"\>A\<\/label\>\<br \/\>
\<input name\="test\[\]" type\="checkbox" value\="b" id\="qf_([0-9a-z]+)" \/\>\<label for\="qf_\2"\>B\<\/label\>\<br \/\>
\<input name\="test\[\]" type\="checkbox" value\="c" id\="qf_([0-9a-z]+)" \/\>\<label for\="qf_\3"\>C\<\/label\>\<br \/\>
\<label for\="qf_([0-9a-z]+)"\>Other\:\<\/label\> \<input id\="qf_\4" name\="test\[\]" type\="text" \/\>
