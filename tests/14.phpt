--TEST--
14.phpt: Test exporting altselect, multiple mode, with other, single value submitted
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

$submitValues = array('test' => 'c');
var_dump($select->exportValue($submitValues));
?>
--EXPECT--
array(1) {
  [0]=>
  string(1) "c"
}
