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
                 
                  {foreach from=$data item="d"}
             
                  <tr>
                    <td>{$d.productcat}</td>
                    <td>{$d.productname}</td>
                    <td>{$d.details}</td>
                    <td>{$d.quantity}</td>
                    <td>{$d.image}</td>
                    <td>{$d.amount}</td>
                    <td><a href="productedit.php?k={$d.pkey}" class="btn btn-primary">Edit</a></td>
                    <td><a href="productdelete.php?k={$d.pkey}" class="btn btn-danger">Delete</a></td>
                    <td><a href="farm_feedback_view.php?k={$d.pkey}" class="btn btn-primary">Feedbacks</a></td>
                  </tr>
                    </form>
                    {/foreach }
  </table>
</body>
</html>