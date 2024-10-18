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
                    <!-- <th>USER NAME</th> -->
                    <th>QUANTITY</th>
                    <th>TOTAL AMOUNT</th>
                  </tr>
                 
                  {foreach from=$data item="d"}
             
                  <tr>
                    <td>{$d.productcat}</td>
                    <td>{$d.productname}</td>
                    <td>{$d.details}</td>
                    <!-- <td>{$d.name}</td> -->
                    <td>{$d.quantity}</td>
                    <td>{$d.amount}</td>
                    <td><a href="feedback.php?k={$d.bkey}" class="btn btn-primary">Feedback</a></td>
                     <td><a href="product_cancel.php?k={$d.bkey}" class="btn btn-primary">cancel</a></td>
                    <!-- <td><a href="comment.php?k={$d.bkey}" class="btn btn-primary">Comment</a></td> -->
                  </tr>
                    </form>
                    {/foreach }
                  </table>
                 </body>
</html>