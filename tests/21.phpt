--TEST--
20.phpt: Test singular mode, with ordered list style rendering, with an id
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
$select->setListType('ol');
$select->setAttribute('id', 'test');
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
\<ol\>
\<li id\="_qf_a_test" class\="_qf_option"\>\<input name\="test" value\="a" type\="radio" id\="qf_([a-z0-9]+)" onclick\="_qf_altselect_disableElement\(this\.form\.elements\[this\.name \+ '_qf_other'\],true\);" \/\>\<label for\="qf_\1"\>A\<\/label\>\<\/li\>
\<li id\="_qf_b_test" class\="_qf_option"\>\<input name\="test" value\="b" type\="radio" id\="qf_([a-z0-9]+)" onclick\="_qf_altselect_disableElement\(this\.form\.elements\[this\.name \+ '_qf_other'\],true\);" \/\>\<label for\="qf_\2"\>B\<\/label\>\<\/li\>
\<li id\="_qf_c_test" class\="_qf_option"\>\<input name\="test" value\="c" type\="radio" id\="qf_([a-z0-9]+)" onclick\="_qf_altselect_disableElement\(this\.form\.elements\[this\.name \+ '_qf_other'\],true\);" \/\>\<label for\="qf_\3"\>C\<\/label\>\<\/li\>
\<li id\="_qf_other_test" class\="_qf_other"\>\<input name\="test" value\="_qf_other" type\="radio" id\="qf_([a-z0-9]+)" onclick\="_qf_altselect_disableElement\(this\.form\.elements\[this\.name\+'_qf_other'\],false\);this\.form\.elements\[this\.name\+'_qf_other'\]\.focus\(\);this\.form\.elements\[this\.name\+'_qf_other'\]\.select\(\);" \/\>\<label for\="qf_\4"\>Other\<\/label\>\<\/li\>
\<li id\="_qf_other_text_test" class\="_qf_other_text"\>\<label for\="qf_([a-z0-9]+)"\>If other please specify\:\<\/label\> \<input id\="qf_\5" name\="test_qf_other" type\="text" \/\>\<\/li\>
\<\/ol\>
\<script type\="text\/javascript"\>
\/\/\<\!\[CDATA\[
_qf_altselect_disableElement\(document\.getElementById\('qf_[0-9a-z]+'\),true\);
\/\/\]\]\>
\<\/script\>
