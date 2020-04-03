<style type="text/css">
#global {
	height: 300px;
	width: 400px;
	border: 1px solid #ddd;
	background: #f1f1f1;
	overflow-y: scroll;
}
#mensajes {
	height: auto;
}
.texto {
	padding:4px;
	background:#fff;
}
</style>
<form method=post>
<div id="global">
  <div id="mensajes">
   
	  
	   <div class="texto">dolar a quetzal</div><input type="number" name="a1">
	   <div class="texto">dolar a quetzal</div><input type="number" name="a1">
	  aqui CREA TODAS LAS CONVERSIONES DE LA LINEA 33 HASTA LA 58, PONELE DOLAR A QUETZAL SEGUN CORRESPONDA, CAMBIALES LOS NAMES
  </div>
</div>
<input type="submit" value="cambiar_divisas" name=cambiar_divisas>
</form>
<?php
 
if($_POST['cambiar_divisas']){
	 <div class="texto">dolar a quetzal</div><input type="number" name="a1">
    $dolar_quetzal = $_POST['a1'];
	 <div class="texto">dolar a lempira</div><input type="number" name="a2">
    $dolar_lempira = 0.040;
	 <div class="texto">dolar euro</div><input type="number" name="a3">
    $dolar_euro = 1.09;
	
	   <div class="texto">dolar a cordoba</div><input type="number" name="a4">
    $dolar_cordoba = 0.029;
    
    
    $euro_quetzal = 8.32;
    $euro_lempira = 26.92;
    $euro_dolar = 1.08;
    $euro_cordoba = 36.79;
    
    $quetzal_dolar = 0.13;
    $quetzal_lempira = 3.24;
    $quetzal_euro = 0.12;
    $quetzal_cordoba = 4.42;
    
    $lempira_dolar = 0.040;
    $lempira_quetzal = 0.31;
    $lempira_euro = 0.037;
    $lempira_cordoba = 1.37;
    
    $cordoba_dolar = 0.029;
    $cordoba_quetzal = 0.23;
    $cordoba_lempira = 0.73;
    $cordoba_euro = 0.027;



}else{
    $dolar_quetzal = 0.13;
    $dolar_lempira = 0.040;
    $dolar_euro = 1.09;
    $dolar_cordoba = 0.029;
    
    
    $euro_quetzal = 8.32;
    $euro_lempira = 26.92;
    $euro_dolar = 1.08;
    $euro_cordoba = 36.79;
    
    $quetzal_dolar = 0.13;
    $quetzal_lempira = 3.24;
    $quetzal_euro = 0.12;
    $quetzal_cordoba = 4.42;
    
    $lempira_dolar = 0.040;
    $lempira_quetzal = 0.31;
    $lempira_euro = 0.037;
    $lempira_cordoba = 1.37;
    
    $cordoba_dolar = 0.029;
    $cordoba_quetzal = 0.23;
    $cordoba_lempira = 0.73;
    $cordoba_euro = 0.027;
}
?>
<form>
     
    <label> Introduzca el valor: </label><br /><br />
    
    <input type=number name=valor min=0 required/> <br /> <br />   
           
        <label> Selecciona tu moneda:        </label>     
        <select name=lista_actual>           
            <option value=Dolar>Dolar</option> 
            <option value=Quetzal>Quetzales</option>
            <option value=Lempira>Lempiras</option>
            <option value=Euro>Euro</option> 
            <option value=Cordoba>Cordobas</option>
            
        </select>
         <br />
    <input type=submit value=enviar>  
    <hr>
 
</form>



