<script type="text/javascript">		

			function mostrarReferencia(){
			if (document.signupform.reside[1].checked == true) {
					document.getElementById('motivo').style.display='block';
					} 
					else {
							document.getElementById('motivo').style.display='none';
						}
					}
			
			function mostrarHabitanteNuevo(){
			if (document.signupform.nuevo[0].checked == true) {
					document.getElementById('cuota').style.display='block';
					} 
					else {
							document.getElementById('cuota').style.display='none';
						}
					}
					
					
			function MostrarReligion(sel) {
			  if (sel.value=="otra"){
				   divC = document.getElementById("especifica_otra");
				   divC.style.display = "";
						}
					else{

					   divC = document.getElementById("especifica_otra");
					   divC.style.display="none";
						}
					}
					
			function cargoonChange(sel) {
			  if (sel.value=="otros"){
				   divC = document.getElementById("otro_cargo");
				   divC.style.display = "";
						}
					else{

					   divC = document.getElementById("otro_cargo");
					   divC.style.display="none";
						}
					}
			
			function MostrarEjidatario(sel) {
			  if (sel.value=="Ejidatario"){
				   divC = document.getElementById("periodo");
				   divC.style.display = "";
						}
					else{

					   divC = document.getElementById("periodo");
					   divC.style.display="none";
						}
					}
					
	
			function appendColumn() {
				var tbl = document.getElementById("my-table"), // table reference
					i;
				// open loop for each row and append cell
				for (i = 0; i < tbl.rows.length; i++) {
					createCell(tbl.rows[i].insertCell(tbl.rows[i].cells.length), i, 'col');
				}
			}
			
			function filtrado($datos){
					$datos = trim($datos); // Elimina espacios antes y después de los datos
					$datos = stripslashes($datos); // Elimina backslashes \
					$datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
				return $datos;
	
	</script>	