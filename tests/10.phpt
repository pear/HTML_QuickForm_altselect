--TEST--
10.phpt: Test exporting altselect, singular mode, with other, other value submitted
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

$submitValues = array('test' => '_qf_other', 'test_qf_other' => 'd');
var_dump($select->exportValue($submitValues));
?>
--EXPECT--
string(1) "d"
