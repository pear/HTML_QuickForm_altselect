--TEST--
13.phpt: Test exporting altselect, multiple mode, with other
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

$submitValues = array('test' => array('b','c','d'));
var_dump($select->exportValue($submitValues));
?>
--EXPECT--
array(3) {
  [0]=>
  string(1) "b"
  [1]=>
  string(1) "c"
  [2]=>
  string(1) "d"
}
