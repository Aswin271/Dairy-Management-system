<?php /* Smarty version 2.6.26, created on 2022-10-03 09:11:57
         compiled from userviewproduct.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <h2 align="center">PRODUCTS</h2>
  <table align="center" class="table table-striped">

  <form method="post" action="">
    <tr><input type="hidden" name="hide" value="h">
    </tr>
  <tr><td></td><td>  Search<input type="text" name="search"></td></tr>
        <tr>
      <td></td><td><input type="submit" name="submit" value="serch" class="btn btn-primary"></td>
  </tr>
<?php if ($this->_tpl_vars['view'] != null): ?>
<tr>

                    <th>PRODUCT CATEGORY</th>
                    <th>PRODUCT NAME</th>
                    <th>DETAIL</th>
                    <th>QUANTITY</th>
                    <th>IMAGE</th>
                    <th>AMOUNT</th>
                  </tr>
                 
                  <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
             
                  <tr>
                    <td><?php echo $this->_tpl_vars['s']['productcat']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['s']['productname']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['s']['details']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['s']['quantity']; ?>
</td>
                    <td><img src="upload/<?php echo $this->_tpl_vars['s']['pkey']; ?>
/<?php echo $this->_tpl_vars['s']['image']; ?>
" width="200px" height="150px"></td>
                    <td><?php echo $this->_tpl_vars['s']['amount']; ?>
</td>
                    <td><a href="quantity.php?k=<?php echo $this->_tpl_vars['d']['pkey']; ?>
" class="btn btn-primary">BUY</a></td>
                    <td><a href="review.php?k=<?php echo $this->_tpl_vars['d']['pkey']; ?>
" class="btn btn-primary">Review</a></td>
                  </tr>
                    </form>
                    <?php endforeach; endif; unset($_from); ?>
  </table>
  <?php else: ?>
  <table align="center" class="table table-striped">
  <tr>

                    <th>PRODUCT CATEGORY</th>
                    <th>PRODUCT NAME</th>
                    <th>DETAIL</th>
                    <th>QUANTITY</th>
                    <th>IMAGE</th>
                    <th>AMOUNT</th>
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
                    <td><?php echo $this->_tpl_vars['d']['quantity']; ?>
</td>
                    <td><img src="upload/<?php echo $this->_tpl_vars['d']['pkey']; ?>
/<?php echo $this->_tpl_vars['d']['image']; ?>
" width="200px" height="150px"></td>
                    <td><?php echo $this->_tpl_vars['d']['amount']; ?>
</td>
                     <td><a href="quantity.php?k=<?php echo $this->_tpl_vars['d']['pkey']; ?>
" class="btn btn-primary">BUY</a></td>
                     <td><a href="review.php?k=<?php echo $this->_tpl_vars['d']['pkey']; ?>
" class="btn btn-primary">Review</a></td>
                  </tr>
                    </form>
                    <?php endforeach; endif; unset($_from); ?>
                  </table>
                  <?php endif; ?>
</body>
</html>