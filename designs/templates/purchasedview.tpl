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
                    <th>USER NAME</th>
                    <th>QUANTITY</th>
                    <th>TOTAL AMOUNT</th>
                  </tr>
                 
                  {foreach from=$data item="d"}
             
                  <tr>
                    <td>{$d.productcat}</td>
                    <td>{$d.productname}</td>
                    <td>{$d.details}</td>
                    <td>{$d.name}</td>
                    <td>{$d.quantity}</td>
                    <td>{$d.amount}</td>
                    {if $d.cancel_status==1}
                    <td>cancelled</td>         
                    {/if} 
                    <td><a href="refund.php?k={$d.bkey}&&amount={$d.amount}&&contact={$d.contact}" class="btn btn-primary">refund</a></td>       
                  </tr>
                    </form>
                    {/foreach }
                  </table>
                 </body>
</html>