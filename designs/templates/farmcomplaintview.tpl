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
                 
                  {foreach from=$data item="d"}
             
                  <tr>
                    <td>{$d.name}</td>
                    <td>{$d.complaint}</td>
                    <td>{$d.currentdate}</td>
                  </tr>
                    </form>
                    {/foreach }
  </table>
</body>
</html>
