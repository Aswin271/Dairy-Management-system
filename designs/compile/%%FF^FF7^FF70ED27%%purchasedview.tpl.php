<?php /* Smarty version 2.6.26, created on 2022-09-25 08:32:23
         compiled from purchasedview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <h2 align="center">PURCHASED DETAILS</h2>
  <table align="center" class="table table-striped">
  <tr>

                    <th>PRODUCT CATEGORY</th>
                    <th>PRODUCT NAME</th>
                    <th>DETAIL</th>
                    <th>USER NAME</th>
                    <th>QUANTITY</th>
                    <th>TOTAL AMOUNT</th>
                  </tr>
                 
                  <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
             
                  <tr>
                    <td><?php echo $this->_tpl_vars['d']['productcat']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['productname']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['details']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['name']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['quantity']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['amount']; ?>
</td>
                    <?php if ($this->_tpl_vars['d']['cancel_status'] == 1): ?>
                    <td>cancelled</td>         
                    <?php endif; ?> 
                    <td><a href="refund.php?k=<?php echo $this->_tpl_vars['d']['bkey']; ?>
&&amount=<?php echo $this->_tpl_vars['d']['amount']; ?>
&&contact=<?php echo $this->_tpl_vars['d']['contact']; ?>
" class="btn btn-primary">refund</a></td>       
                  </tr>
                    </form>
                    <?php endforeach; endif; unset($_from); ?>
                  </table>
                 </body>
</html>