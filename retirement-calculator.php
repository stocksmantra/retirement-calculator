<!DOCTYPE html>
<html>
<head>
    <title>Retirement Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        background-image: url('https://thumbs.dreamstime.com/b/calculator-pen-table-calendar-blue-background-top-view-office-desk-copy-space-179944470.jpg');	
}
  .text{
    margin-left:11.5em;
    margin-top:2.5em;
  }
  .form-signin {
    border-radius:9px;
  max-width: 455px;
  padding: 10px 30px 40px;
  margin: 0 auto;
  background-color:	#F0F8FF;
  border: 1px solid rgba(0,0,0,0.1);}
  .form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 4px;
		@include box-sizing(border-box);}
     .font{
        font-size:18px;
     }
     h3{
      color:rgb(70,130,190);
     }
     .button{
        background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 4px 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:3px ;
     }   
</style>
<body>
    <h1 class="text">Retirement Calculator</h1>
    <form method="POST" action="" class="form-signin">
        <label for="monthly_investment" class="font"><b>Monthly Investment:</b></label>
        <input type="number" class="form-control" name="monthly_investment" id="monthly_investment" required>
        <br>
        <label for="annual_rate"class="font"><b>Annual Rate of Return (%):</b></label>
        <input type="number" class="form-control" name="annual_rate" id="annual_rate" step="0.01" required>
        <br>
        <label for="years"class="font"><b>Number of Years to Invest:</b></label>
        <input type="number" class="form-control" name="years" id="years" required>
        <br>
        <input type="submit" class="button" value="Calculate"><br>
        <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $monthly_investment = $_POST['monthly_investment'];
    $annual_rate = $_POST['annual_rate'];
    $years = $_POST['years'];

    $total_months = $years * 12;
    $monthly_rate = ($annual_rate / 100) / 12;
    $retirement_total = 0;

    for ($i = 0; $i < $total_months; $i++) {
        $retirement_total = ($retirement_total + $monthly_investment) * (1 + $monthly_rate);
    }

    echo "<h4>Retirement Total: $" . number_format($retirement_total, 2)."</h4>";
}
?>
    </form>

</body>
</html>
