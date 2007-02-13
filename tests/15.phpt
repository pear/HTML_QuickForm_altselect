--TEST--
15.phpt: Test exporting altselect, multiple mode, with other, nothing submitted
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
$select->setSelected(array('b','c'));
$select->setIncludeOther(true);

$submitValues = array();
var_dump($select->exportValue($submitValues));
?>
--EXPECT--
array(2) {
  [0]=>
  string(1) "b"
  [1]=>
  string(1) "c"
}
