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

  <form method="post" action="">
    <tr><input type="hidden" name="hide" value="h">
    </tr>
  <tr><td></td><td>  Search<input type="text" name="search"></td></tr>
        <tr>
      <td></td><td><input type="submit" name="submit" value="serch" class="btn btn-primary"></td>
  </tr>
{if $view!=null}
<tr>

                    <th>PRODUCT CATEGORY</th>
                    <th>PRODUCT NAME</th>
                    <th>DETAIL</th>
                    <th>QUANTITY</th>
                    <th>IMAGE</th>
                    <th>AMOUNT</th>
                  </tr>
                 
                  {foreach from=$view item="s"}
             
                  <tr>
                    <td>{$s.productcat}</td>
                    <td>{$s.productname}</td>
                    <td>{$s.details}</td>
                    <td>{$s.quantity}</td>
                    <td><img src="upload/{$s.pkey}/{$s.image}" width="200px" height="150px"></td>
                    <td>{$s.amount}</td>
                    <td><a href="quantity.php?k={$d.pkey}" class="btn btn-primary">BUY</a></td>
                    <td><a href="review.php?k={$d.pkey}" class="btn btn-primary">Review</a></td>
                  </tr>
                    </form>
                    {/foreach }
  </table>
  {else}
  <table align="center" class="table table-striped">
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
                    <td><img src="upload/{$d.pkey}/{$d.image}" width="200px" height="150px"></td>
                    <td>{$d.amount}</td>
                     <td><a href="quantity.php?k={$d.pkey}" class="btn btn-primary">BUY</a></td>
                     <td><a href="review.php?k={$d.pkey}" class="btn btn-primary">Review</a></td>
                  </tr>
                    </form>
                    {/foreach }
                  </table>
                  {/if}
</body>
</html>