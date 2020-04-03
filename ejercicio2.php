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
	  <div class="texto"></div><input type="number" name="a5">
	  <div class="texto"></div><input type="number" name="a6">
	  <div class="texto"></div><input type="number" name="a7">
	  <div class="texto"></div><input type="number" name="a8">
	  <div class="texto"></div><input type="number" name="a9">
	  <div class="texto"></div><input type="number" name="a10">
	  <div class="texto"></div><input type="number" name="a11">
	  <div class="texto"></div><input type="number" name="a12">
	  <div class="texto"></div><input type="number" name="a13">
	  <div class="texto"></div><input type="number" name="a14">
	  <div class="texto"></div><input type="number" name="a15">
	  <div class="texto"></div><input type="number" name="a16">
	  <div class="texto"></div><input type="number" name="a17">
	  <div class="texto"></div><input type="number" name="a18">
	  <div class="texto"></div><input type="number" name="a19">
	  <div class="texto"></div><input type="number" name="a20">
  </div>
</div>
<input type="submit" value="cambiar_divisas" name=cambiar_divisas>
</form>
<?php
 
if($_POST['cambiar_divisas']){
	if($_POST['a1'])//vas a poner  if($_POST['a1 o a2 o a3'])
    {
        $dolar_quetzal = $_POST['a1']; 
    }
	else{
        $dolar_quetzal = 0.13;
    }
    //poner if($_POST) aca como esta alla arriba y encerrar la linea 56 en corchetes
    if($_POST['a2'])
    {
        $dolar_lempira =$_POST['a2'];
    }
	else{
        $dolar_lempira = 0.040;
    }
	
     //poner un else y abrir llaves {}, dentro de las llaves ANDATE A LA LINEA 88 DONDE ESTA EL ELSE
     // Y ANDATE A LA VARIABLE QUE CORRESPONDA, CORTALA Y PONELA ACA, EJEMPLO ACA PONDRAS LA VARIABLE DOLAR_LEMPIRA PERO
     //PERO CON EL OTRO VALOR =0.55
     
if($_POST['a1'])
    {
        $dolar_euro = $_POST['a3'];
    }
	else{
       $dolar_euro = 1.09;
    }
    
	
	   
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


	///HASTA ACA LOS CAMBIOS
}else{
    
    
    
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
