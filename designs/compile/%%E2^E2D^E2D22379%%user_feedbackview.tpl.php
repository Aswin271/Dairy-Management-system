<?php /* Smarty version 2.6.26, created on 2022-09-25 08:40:41
         compiled from user_feedbackview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <h2 align="center">FEEDBACK DETAILS</h2>
  <table align="center" class="table table-striped">
  <tr>
                    <th>RATING</th>
                    <th>COMMENT</th>
                  </tr>
                 
                  <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
             
                  <tr>
                    <td><?php echo $this->_tpl_vars['d']['rating']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['comment']; ?>
</td>
                    <td><a href="feedback_edit.php?k=<?php echo $this->_tpl_vars['d']['fekey']; ?>
" class="btn btn-primary">Edit</a></td>
                    <td><a href="feedback_delete.php?k=<?php echo $this->_tpl_vars['d']['fekey']; ?>
" class="btn btn-primary">Delete</a></td>
                  </tr>
                    </form>
                    <?php endforeach; endif; unset($_from); ?>
                  </table>
                 </body>
</html>