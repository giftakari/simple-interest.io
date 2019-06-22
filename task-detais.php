<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DYI Conditionals</title>
    <style>
 body {
 font-family:"Times New Roman", Times, serif;
 font-size:2em;
 color: green;
 
 }
 caption{
     margin: .3em;
     font-size: 2em;
     font-weight: bold;
 }
 form{
     border: 5px solid gold;
     -webkit-box-shadow: 16px 18px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 16px 18px 5px 0px rgba(0,0,0,0.75);
box-shadow: 16px 18px 5px 0px rgba(0,0,0,0.75);
 }
</style>
</head>
<body>

    <?php
    $rate =7;
 error_reporting(0);
$principle = $_POST['principle'];
$rate = $_POST['rate'];
$time = $_POST['time'];



                            

 if ($_POST['clear'])
{
$principle = "";
$rate = "";
$time = "";
$display_results = "";
}
 if ($_POST['compute']) 
 {
$interest =($principle*$rate*$time)/100;
$display_results = round($interest,2);


 }
?>

        <form action="" method="POST">


                <table>
                    <caption> Simple Interest Calculator</caption>
                    <tr>
                        <td> Amount You want to borrow: </td>
                        <td>
                            <input type=t ext name="principle" value="<?php echo $principle;?>" size="20" autofocus>
                    </tr>
                    <tr>
                        <td> Rate of Interest : </td>
                        <td>
                            <input type=t ext name="rate" value="<?php echo $rate;?>" size="10">
                    </tr>
                    <tr>
                        <td> Duration in Years: </td>
                        <td>
                            <input type=t ext name="time" value="<?php echo $time;?>" size="20">
                    </tr>
                    <tr>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Interest Rate is </td>
                        <td>
                            <input type=t ext name="solve_interest" value="<?php echo $display_results;
                          
                            ?>" size="12" readonly>
                            
                    </tr>
                    <tr>
                        <td> </td>
                    </tr>
                    <td colspan=4>
                        <input type="submit" name="compute" value="Compute Interest" title="Click here to compute for interest rate.">
                        <input type="submit" name="clear" value="Clear" title="Click here to clear text boxes.">
                    </td>
                    </tr>
                    
                        
                    
                </table>
                
        </form>
      
 </body>
</html>
    
</body>
</html>