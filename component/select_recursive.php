<script>
 //igual ao errado só que mais rápido
 function enviarform(form) {
		
  document.getElementById(form).submit();
        console.log(form);
}
</script>
<?php 

  

  class selectRecursive{
    function ignition($lista_p, $lista_r){?>
      <?php $vai = false;
        if(!$_GET){
        $vai = true;
        }
      ?>
        <?php foreach ($lista_p as $key => $value) {?>
            <div style="<?php if(@$_GET['count']+1 <= $key  || !$_GET && $vai == false){?>display:none;<?php }?>">
            <?php $vai = 0; ?>
            <h3><?php echo $value; ?></h3>
            <form name="slct<?php echo $key+1;?>" method="GET" id="slct<?php echo $key+1;?>" action="#">
                <select <?php if(@$_GET['count'] > $key){?> disabled <?php };?> name="slct<?php echo $key+1;?>" onchange="enviarform('slct<?php echo $key+1;?>');">
                  <option  value="sim">Selecione</option>
                  <?php foreach ($lista_r as $key_r => $value) {?>
                    <option value="<?php echo $value;?>"><?php echo $value;?></option>
                  <?php }?>
                </select>
                <input type="hidden" name="count" value="<?php echo $key+1; ?>">
            </form>
         </div>
        <?php }?>
    <?php }
  }
?>