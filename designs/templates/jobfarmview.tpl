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
                 
                  {foreach from=$data item="d"}
             
                  <tr>
                    <td>{$d.jobcategory}</td>
                    <td>{$d.jobname}</td>
                    <td>{$d.jobdescription}</td>
                    <td>{$d.salary}</td>
                    <td>{$d.lastdateforapply}</td>
                    <td>{$d.qualification}</td>
                    <td><a href="userjobapply.php?key={$d.jkey}" class="btn btn-success">Apply</td>
                    </form>
                    {/foreach }
  </table>
</body>
</html>
