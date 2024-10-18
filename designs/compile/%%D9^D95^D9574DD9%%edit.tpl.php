<?php /* Smarty version 2.6.26, created on 2022-05-22 09:00:37
         compiled from edit.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit</title>
</head>
<body>
    <h2><center><u>EDITING</u></center></h2>
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
    <table align="center">
        <form method="post" action="">
            <tr>
                <td>
                    <input type="hidden" name="hide" value="h">
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"value="<?php echo $this->_tpl_vars['e']['name']; ?>
">
                </td>
            </tr>
             <tr>
                <td>Address</td>
                <td><textarea name="address" id=""cols="30" rows="10"><?php echo $this->_tpl_vars['e']['address']; ?>
</textarea></td>
            </tr>
            <tr>
                <td>Gender</td>
                <?php if ($this->_tpl_vars['e']['gender'] == 'male'): ?>
                <td><input type="radio" name="gender"value="male"checked>male
                    <input type="radio" name="gender"value="female">female</td>
                <?php else: ?>
                <td><input type="radio" name="gender"value="male">male
                    <input type="radio" name="gender"value="female"checked>female</td>
                    <?php endif; ?>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"value="<?php echo $this->_tpl_vars['e']['email']; ?>
"></td>
            </tr>
            <tr>
                <td></td><td><input type="submit"value="edit"></td>
            </tr>
        </form>
    </table>
    <?php endforeach; endif; unset($_from); ?>
</body>
</html>