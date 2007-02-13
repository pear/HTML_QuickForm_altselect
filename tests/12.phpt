--TEST--
12.phpt: Test exporting altselect, singular mode, with other, with nothing submitted
--FILE--
<?php

require_once 'HTML/QuickForm.php';
require_once 'HTML/QuickForm/altselect.php';

$select =& HTML_QuickForm::createElement('altselect', 'test', null, array(
    'a' => 'A', 
    'b' => 'B', 
    'c' => 'C',
    ));
$select->setSelected('d');
$select->setIncludeOther(true);

$submitValues = array();
var_dump($select->exportValue($submitValues));
?>
--EXPECT--
string(1) "d"
