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
 width: 450px;
    margin: 0 auto;
}
div.wrapper div.employees{
   margin: 0 auto;
   width: 780px;
}
form.appform{
    width: 450px;
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
<div class="empform">
<form class="appform"  method="post" enctype="application/x-www-form-urlencoded">

    <fieldset>
        <legend>Personal info</legend>
        <?php if(isset($_SESSION['mes'])) {?>
        <p class=" message <?= isset($error)? 'error' : '' ?>">
            <?= $_SESSION['mes' ] ?>
        </p>
        <?php
        unset($_SESSION['mes']);
        }?>
        <table>
            <tr>
              <td>  <label for="username"> Employee Name :  </label></td>
            </tr>
            <tr>
                <td><input id="username" required type="text" name="name"  placeholder="Write Your Name Here" tabindex="1"  ></td>
            </tr>
            <tr>
                <td>  <label for="Age">Employee Age :</label></td>
            </tr> 
            <tr>
                <td><input id="Age" type="number" name="age" placeholder="Write Your Age Here" tabindex="2"  required  ></td>
            </tr>
            <tr>
                <td>  <label for="address" > address :</label></td>
            </tr>
            <tr>
                <td><input id="address" type="text" name="address" placeholder="Write Your Address Here" tabindex="3"  required   ></td>
            </tr>

            <tr>
                <td>  <label for="salary"> Employee Salary :  </label></td>
            </tr>
            <tr>
                <td><input required id="salary" type="number" name="salary" placeholder="Write Your Salary Here" step="0.01"   tabindex="4" min="1500" max="9000" ></td>
            </tr>
            <tr>
                <td>  <label for="tax"> Employee Tax :  </label></td>
            </tr>
            <tr>
                <td><input required type="number" id="tax" placeholder="Write Tax Here" name="tax" step="0.01"   tabindex="4" min="1" max="5" ></td>
            </tr>
        </table>
    </fieldset>
    <table>
        <tr>
            <td><input class="submit" type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</form>
</div>
    </div>