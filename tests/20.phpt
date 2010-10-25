--TEST--
20.phpt: Test singular mode, with new unordered list style rendering
--FILE--
<?php

require_once 'HTML/QuickForm.php';
require_once 'HTML/QuickForm/altselect.php';

$select =& HTML_QuickForm::createElement('altselect',
    'test',
    null,
    array('a' => 'A', 'b' => 'B', 'c' => 'C')
    );
$select->setIncludeOther();
$select->setListType('ul');
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
\<ul\>
\<li class\="_qf_option"\>\<input name\="test" value\="a" type\="radio" id\="qf_([a-z0-9]+)" onclick\="_qf_altselect_disableElement\(this\.form\.elements\[this\.name \+ '_qf_other'\],true\);" \/\>\<label for\="qf_\1"\>A\<\/label\>\<\/li\>
\<li class\="_qf_option"\>\<input name\="test" value\="b" type\="radio" id\="qf_([a-z0-9]+)" onclick\="_qf_altselect_disableElement\(this\.form\.elements\[this\.name \+ '_qf_other'\],true\);" \/\>\<label for\="qf_\2"\>B\<\/label\>\<\/li\>
\<li class\="_qf_option"\>\<input name\="test" value\="c" type\="radio" id\="qf_([a-z0-9]+)" onclick\="_qf_altselect_disableElement\(this\.form\.elements\[this\.name \+ '_qf_other'\],true\);" \/\>\<label for\="qf_\3"\>C\<\/label\>\<\/li\>
\<li class\="_qf_other"\>\<input name\="test" value\="_qf_other" type\="radio" id\="qf_([a-z0-9]+)" onclick\="_qf_altselect_disableElement\(this\.form\.elements\[this\.name\+'_qf_other'\],false\);this\.form\.elements\[this\.name\+'_qf_other'\]\.focus\(\);this\.form\.elements\[this\.name\+'_qf_other'\]\.select\(\);" \/\>\<label for\="qf_\4"\>Other\<\/label\>\<\/li\>
\<li class\="_qf_other_text"\>\<label for\="qf_([a-z0-9]+)"\>If other please specify\:\<\/label\> \<input id\="qf_\5" name\="test_qf_other" type\="text" \/\>\<\/li\>
\<\/ul\>
\<script type\="text\/javascript"\>
\/\/\<\!\[CDATA\[
_qf_altselect_disableElement\(document\.getElementById\('qf_[0-9a-z]+'\),true\);
\/\/\]\]\>
\<\/script\>
