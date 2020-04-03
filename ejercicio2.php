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
	   <div class="texto">dolar a lempira</div><input type="number" name="a2">
	  <div class="texto">dolar euro</div><input type="number" name="a3">
	 <div class="texto">dolar a cordoba</div><input type="number" name="a4">
  </div>
</div>
<input type="submit" value="cambiar_divisas" name=cambiar_divisas>
</form>
<?php
 
if($_POST['cambiar_divisas']){
	
    $dolar_quetzal = $_POST['a1'];
	 
    $dolar_lempira =$_POST['a2'];
	 
    $dolar_euro = $_POST['a3'];
	
	   
    $dolar_cordoba = $_POST['a4'];
    
    
    $euro_quetzal = $_POST['a5'];
    $euro_lempira =$_POST['a6'];
    $euro_dolar =$_POST['a7'];
    $euro_cordoba = $_POST['a8'];
    
    $quetzal_dolar =$_POST['a9'];
    $quetzal_lempira =$_POST['a10'];
    $quetzal_euro = $_POST['a11'];
    $quetzal_cordoba = $_POST['a12'];
    
    $lempira_dolar =$_POST['a13'];
    $lempira_quetzal =$_POST['a14'];
    $lempira_euro =$_POST['a15'];
    $lempira_cordoba =$_POST['a16'];
    
    $cordoba_dolar =$_POST['a17'];
    $cordoba_quetzal = $_POST['a18'];
    $cordoba_lempira = $_POST['a19'];
    $cordoba_euro =$_POST['a20'];



}else{
    $dolar_quetzal =$_POST['a21'];
    $dolar_lempira =$_POST['a22'];
    $dolar_euro =$_POST['a23'];
    $dolar_cordoba =$_POST['a24'];
    
    
    $euro_quetzal = $_POST['a25'];
    $euro_lempira = $_POST['a26'];
    $euro_dolar =$_POST['a27'];
    $euro_cordoba = $_POST['a28'];
    
    $quetzal_dolar =$_POST['a29'];
    $quetzal_lempira =$_POST['a30'];
    $quetzal_euro =$_POST['a31'];
    $quetzal_cordoba =$_POST['a4'];
    
    $lempira_dolar =$_POST['a32'];
    $lempira_quetzal =$_POST['a33'];
    $lempira_euro =$_POST['a34'];
    $lempira_cordoba =$_POST['a35'];
    
    $cordoba_dolar =$_POST['a36'];
    $cordoba_quetzal =$_POST['a37'];
    $cordoba_lempira =$_POST['a38'];
    $cordoba_euro =$_POST['a39'];
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



