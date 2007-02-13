--TEST--
9.phpt: Test exporting altselect, singular mode, with other, regular value submitted
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

$submitValues = array('test' => 'b');
var_dump($select->exportValue($submitValues));
?>
--EXPECT--
string(1) "b"
