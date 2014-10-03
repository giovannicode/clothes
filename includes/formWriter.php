<?php

function echoLabelText($lblTxt, $txtName)
{
	echo '<div width="800px"><div width="200px"><label for="' . $txtName . '">' . $lblTxt . '</label></div>'
	. '<input type="text" name="' . $txtName . '" size="30"/></div>';
}
?>