<?php /* Smarty version 2.6.26, created on 2022-09-25 07:12:54
         compiled from jobuserview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <h2 align="center">JOB VACANCY</h2>
  <table align="center" class="table table-striped" border="2">
  <form method="post">

<tr>
                    <th>JOB CATEGORY</th>
                    <th>JOB NAME</th>
                    <th>JOB DESCRIPTION</th>
                    <th>SALARY</th>
                    <th>LAST DATE FOR APPLY</th>
                    <th>QUALIFICATION</th>
                  </tr>
                 
                  <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
             
                  <tr>
                    <td><?php echo $this->_tpl_vars['d']['jobcategory']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['jobname']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['jobdescription']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['salary']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['lastdateforapply']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['qualification']; ?>
</td>
                    <td><a href="userjobapply.php?key=<?php echo $this->_tpl_vars['d']['jkey']; ?>
" class="btn btn-success">Apply</td>
                    </form>
                    <?php endforeach; endif; unset($_from); ?>
  </table>
</body>
</html>