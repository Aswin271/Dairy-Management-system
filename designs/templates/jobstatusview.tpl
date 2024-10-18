<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <h2 align="center">JOB VACANCY</h2>
  <table align="center" class="table table-striped">
  <form method="post">

<tr>
                    <th>JOB CATEGORY</th>
                    <th>JOB NAME</th>
                    <th>JOB DISCRIPTION</th>
                    <th>SALARY</th>
                    <th>LAST DATE FOR APPLY</th>
                    <th>QUALIFICATION</th>
                    <th>file upload</th>
                  </tr>
                 
                  {foreach from=$data item="d"}
             
                  <tr>
                    <td>{$d.jobcategory}</td>
                    <td>{$d.jobname}</td>
                    <td>{$d.jobdiscription}</td>
                    <td>{$d.salary}</td>
                    <td>{$d.lastdateforapply}</td>
                    <td>{$d.qualification}</td>
                    <td>{$d.fileupload}</td>
                    {if $d.status==0}
                    <td>pending...</td>
                    {elseif $d.status==1}
                    <td>approved.</td>          
                    {else}
                    <td>rejected!</td>
                    {/if}         
                  </tr>
                    </form>
                    {/foreach }
  </table>
</body>
</html>