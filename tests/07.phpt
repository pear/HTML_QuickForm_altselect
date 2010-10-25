--TEST--
7.phpt: Test singular mode without other acting as a group when accepted by a renderer.
--FILE--
<?php

require_once 'HTML/QuickForm.php';
require_once 'HTML/QuickForm/Renderer/Array.php';
require_once 'HTML/QuickForm/altselect.php';

$select =& HTML_QuickForm::createElement('altselect', 'test', null, array(
    'a' => 'A', 
    'b' => 'B', 
    'c' => 'C',
    ));
$select->setGroup(true);
$renderer =& new HTML_QuickForm_Renderer_Array;
$select->accept($renderer);
echo var_export($renderer->toArray(),true);
?>
--EXPECTREGEX--
array \(
  'elements' \=\> 
  array \(
    0 \=\> 
    array \(
      'name' \=\> 'test',
      'value' \=\> NULL,
      'type' \=\> 'group',
      'frozen' \=\> false,
      'required' \=\> false,
      'error' \=\> NULL,
      'label' \=\> '',
      'separator' \=\> NULL,
      'elements' \=\> 
      array \(
        0 \=\> 
        array \(
          'name' \=\> 'test',
          'value' \=\> 'a',
          'type' \=\> 'radio',
          'frozen' \=\> false,
          'required' \=\> false,
          'error' \=\> NULL,
          'label' \=\> '',
          'html' \=\> '\<input name\="test" value\="a" type\="radio" id\="qf_[0-9a-z]+" \/\>',
        \),
        1 \=\> 
        array \(
          'name' \=\> 'test',
          'value' \=\> 'b',
          'type' \=\> 'radio',
          'frozen' \=\> false,
          'required' \=\> false,
          'error' \=\> NULL,
          'label' \=\> '',
          'html' \=\> '\<input name\="test" value\="b" type\="radio" id\="qf_[0-9a-z]+" \/\>',
        \),
        2 \=\> 
        array \(
          'name' \=\> 'test',
          'value' \=\> 'c',
          'type' \=\> 'radio',
          'frozen' \=\> false,
          'required' \=\> false,
          'error' \=\> NULL,
          'label' \=\> '',
          'html' \=\> '\<input name\="test" value\="c" type\="radio" id\="qf_[0-9a-z]+" \/\>',
        \),
      \),
    \),
  \),
\)
