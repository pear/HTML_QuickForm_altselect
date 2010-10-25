--TEST--
11.phpt: Test exporting altselect, singular mode, with other, with an array submitted
--FILE--
<?php

require_once 'HTML/QuickForm.php';
require_once 'HTML/QuickForm/altselect.php';

$select =& HTML_QuickForm::createElement('altselect', 'test', null, array(
    'a' => 'A', 
    'b' => 'B', 
    'c' => 'C',
    ));
$select->setIncludeOther(true);

$submitValues = array('test' => array('b','c'));
var_dump($select->exportValue($submitValues));
?>
--EXPECT--
string(1) "b"
