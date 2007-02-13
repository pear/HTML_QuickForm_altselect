--TEST--
8.phpt: Test singular mode without other, freezing element
--FILE--
<?php

require_once 'HTML/QuickForm.php';
require_once 'HTML/QuickForm/altselect.php';

$select =& HTML_QuickForm::createElement('altselect', 'test', null, array(
    'a' => 'A', 
    'b' => 'B', 
    'c' => 'C',
    ));
$select->freeze();
echo $select->toHtml();
?>
--EXPECTREGEX--
\<tt\>\( \)\<\/tt\>\<label for\="qf_[0-9a-z]+"\>A\<\/label\>\<br \/\>
\<tt\>\( \)\<\/tt\>\<label for\="qf_[0-9a-z]+"\>B\<\/label\>\<br \/\>
\<tt\>\( \)\<\/tt\>\<label for\="qf_[0-9a-z]+"\>C\<\/label\>
