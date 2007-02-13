<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>HTML_QuickForm_altselect - Example Usage</title>
</head>

<body>
<?php

require_once 'HTML/QuickForm.php';

// Include altselect.php after QuickForm, so that the plugin can be loaded
require_once 'HTML/QuickForm/altselect.php';


$form =& new HTML_QuickForm('test_altselect');


// Add the altselect element, using the same arguments as you would a normal select element
$altselect =& $form->addElement('altselect', 'test', 'Select a value:',
  array('a' => 'A',
        'b' => 'B',
		'c' => 'C'));

// Use the setMultiple() method, just as in HTML_QuickForm_select
// to turn the radio buttons into checkboxes
$altselect->setMultiple(true);

// Use setIncludeOther() to include the 'other' textfield for other possible values
$altselect->setIncludeOther(true);

// Use setSelected(), just as in HTML_QuickForm_select
// to set the default values
$altselect->setSelected('b');


$form->addElement('submit', 'submit', 'Submit');

if ($form->validate()) {

    // The exported value will either be a scalar or an array depending on what was posted,
	// just as it would with HTML_QuickForm_select
    $value = $form->exportValue('test');
	
	echo '<p>The result is: '.var_export($value, true).'</p>';
}

$form->display();

?>
</body>
</html>
