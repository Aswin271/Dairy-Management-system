<?php /* Smarty version 2.6.26, created on 2022-09-25 08:33:09
         compiled from farmviewproduct.tpl */ ?>
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
  <form method="post">

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
                    <td><?php echo $this->_tpl_vars['d']['image']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['amount']; ?>
</td>
                    <td><a href="productedit.php?k=<?php echo $this->_tpl_vars['d']['pkey']; ?>
" class="btn btn-primary">Edit</a></td>
                    <td><a href="productdelete.php?k=<?php echo $this->_tpl_vars['d']['pkey']; ?>
" class="btn btn-danger">Delete</a></td>
                    <td><a href="farm_feedback_view.php?k=<?php echo $this->_tpl_vars['d']['pkey']; ?>
" class="btn btn-primary">Feedbacks</a></td>
                  </tr>
                    </form>
                    <?php endforeach; endif; unset($_from); ?>
  </table>
</body>
</html>