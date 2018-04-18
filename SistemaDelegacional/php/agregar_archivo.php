
<?php

	if(isset($_FILES['archivo'] && $_FILES['archivo']['type']=='application/pdf'){
	move_uploaded_file ($_FILES['archivo']['tmp_name'] , './archivos'.$_FILES['archivo']['tmp_name']);
}

?>


