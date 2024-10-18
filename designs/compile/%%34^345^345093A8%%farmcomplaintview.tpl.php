<?php /* Smarty version 2.6.26, created on 2022-09-25 11:10:52
         compiled from farmcomplaintview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <h2 align="center">COMPLAINT</h2>
  <table align="center" class="table table-striped" border="2">
  <form method="post">

<tr>
                    <th>NAME</th>
                    <th>COMPLAINT</th>
                    <th>DATE</th>
                  </tr>
                 
                  <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
             
                  <tr>
                    <td><?php echo $this->_tpl_vars['d']['name']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['complaint']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['currentdate']; ?>
</td>
                  </tr>
                    </form>
                    <?php endforeach; endif; unset($_from); ?>
  </table>
</body>
</html>