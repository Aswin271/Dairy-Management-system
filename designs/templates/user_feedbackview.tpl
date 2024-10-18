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
                 
                  {foreach from=$data item="d"}
             
                  <tr>
                    <td>{$d.rating}</td>
                    <td>{$d.comment}</td>
                    <td><a href="feedback_edit.php?k={$d.fekey}" class="btn btn-primary">Edit</a></td>
                    <td><a href="feedback_delete.php?k={$d.fekey}" class="btn btn-primary">Delete</a></td>
                  </tr>
                    </form>
                    {/foreach }
                  </table>
                 </body>
</html>