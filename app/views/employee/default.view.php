<style>
    
*{
    margin: 0;
    padding: 0;
    border: 0;
    outline: none;
    line-height: 1.2;
    font-size: 1em;

   
}

div.wrapper{
    overflow: hidden;
    
}
div.wrapper div.empform{
float: left;
}
div.wrapper div.employees{
   margin: 0 auto;
   width: 780px;
}
form.appform{
    width: 500px;
    margin: 20px 50px 0 20px;
}
form.appform fieldset{
    padding: 10px;
    background: #f1f1f1;
    border: solid 1px #e4e4e4;
}
form.appform fieldset legend{
    background: #e4e4e4;
    padding: 5px;
    font: 1em Arail, Helvetice, sans-serif;
    color: #666;
}
form.appform table{
    width: 100%;
}
form.appform label{
    font-family: Arial;
    font-size: 0.85em;
    color: #666666;
}
form.appform table tr td input[type=text],
form.appform table tr td input[type=number]
  {
      width: 96%;
      padding: 2%;
      font-family: Arial;
      font-size: 0.85em;
  }
form.appform table tr td input[type=submit]
{
    padding: 8px;
    border-radius: 3px;
    background: green;
    color: #FFF;
    font-family: Arial;
        font-size: .85em;

}
form.appform table tr td
{
    padding: 3px 0;
}
div.wrapper div.employees table{
    width: 700px;
    margin: 20px 20px 0 0;
    border-collapse: collapse;
}
div.wrapper div.employees table thead th{
    text-align: left;

    padding: 5px;
    border-right:solid 2px #e4e4e4 ;
    border-bottom: solid 2px #e4e4e4;
    font: bold .9em Arail, Helvetice, sans-serif ;
    color: #666;
}
div.wrapper div.employees table thead th:last-of-type{
    border-right:none ;
}
div.wrapper div.employees table tbody td{
    text-align: left;

    padding: 5px;
    border:solid 1px #e4e4e4 ;
    font:  .8em Arail, Helvetice, sans-serif ;
    color: #666;
}
div.wrapper div.employees table tbody tr:nth-child(2n) td{
    background: #f1f1f1;
}
form.appform fieldset p.message
{
    background: green;
    color: #FFF;
    padding: 5px;
    margin: 3px 0;
    border-radius: 3px;
    font:.85em Arail, Helvetice, sans-serif ;
}
form.appform fieldset p.message.error{
    background: #900;

}
div.wrapper div.employees table tbody td a:link,
div.wrapper div.employees table tbody td a:visited{
    color: #0886bd;
} 
    
</style>
<div class="wrapper">
 
    <div class="employees">
         <?php if(isset($_SESSION['message'])) {?>
        <p class=" message <?= isset($error)? 'error' : '' ?>">
            <?= $_SESSION['message'] ?>
        </p>
        <?php
        unset($_SESSION['message']);
        }?>
        <a href="employee/add">Add New Employee</a>
        
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>salary</th>
                <th>Tax (%)</th>
                <th>edit</th>
            </tr>
            </thead>
            <tbody>
                <?php
                if(false!==$employees)
                {
                    foreach ($employees as $employee)
                    {
                        ?>
                  <tr>
                <td><?= $employee->name ?></td>
                <td><?= $employee->age ?></td>
                <td><?= $employee->address ?></td>
                <td><?= round($employee->salary) ?></td>
                <td><?= $employee->tax ?></td>
                      <td>
                          <a href="employee/edit/<?= $employee->id ?>">edit</a>
                          <a href="employee/delete/<?= $employee->id ?>" onclick="if(!confirm('Do yo want to delete')) return false;" >delete</a>
                      </td>
                      </tr>
<?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>