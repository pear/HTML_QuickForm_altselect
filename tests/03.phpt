--TEST--
3.phpt: Test singular mode with other
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
echo $select->toHtml();
?>
--EXPECTREGEX--
\<script type\="text\/javascript"\>
\/\/\<\!\[CDATA\[
function _qf_altselect_disableElement\(e,disable\)
\{
  if \(\!disable\) \{
    e\.disabled \= false;
    e\.style\.backgroundColor \= '#ffffff';
  \} else \{
    e\.disabled \= true;
    e\.style\.backgroundColor \= '#cccccc';
  \}
\}
\/\/\]\]\>
\<\/script\>
\<input name\="test" value\="a" type\="radio" id\="qf_([0-9a-z]+)" onclick\="_qf_altselect_disableElement\(this\.form\.elements\[this\.name \+ '_qf_other'\],true\);" \/\>\<label for\="qf_\1"\>A\<\/label\>\<br \/\>
\<input name\="test" value\="b" type\="radio" id\="qf_([0-9a-z]+)" onclick\="_qf_altselect_disableElement\(this\.form\.elements\[this\.name \+ '_qf_other'\],true\);" \/\>\<label for\="qf_\2"\>B\<\/label\>\<br \/\>
\<input name\="test" value\="c" type\="radio" id\="qf_([0-9a-z]+)" onclick\="_qf_altselect_disableElement\(this\.form\.elements\[this\.name \+ '_qf_other'\],true\);" \/\>\<label for\="qf_\3"\>C\<\/label\>\<br \/\>
\<input name\="test" value\="_qf_other" type\="radio" id\="qf_([0-9a-z]+)" onclick\="_qf_altselect_disableElement\(this\.form\.elements\[this\.name\+'_qf_other'\],false\);this\.form\.elements\[this\.name\+'_qf_other'\]\.focus\(\);this\.form\.elements\[this\.name\+'_qf_other'\]\.select\(\);" \/\>\<label for\="qf_\4"\>Other\<\/label\>\<br \/\>
\<label for\="qf_([0-9a-z]+)"\>If other please specify\:\<\/label\> \<input id\="qf_\5" name\="test_qf_other" type\="text" \/\>
\<script type\="text\/javascript"\>
\/\/\<\!\[CDATA\[
_qf_altselect_disableElement\(document\.getElementById\('qf_[0-9a-z]+'\),true\);
\/\/\]\]\>
\<\/script\>
