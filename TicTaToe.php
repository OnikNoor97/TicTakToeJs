<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<html>
<head>
	<title>Tic Tak Toe</title>
</head>
<body>	
<table width="15%">
	<tr>
		<th></th>
		<th></th>
		<th></th>
	</tr>
  <tr>
    <th><button onclick="myFunction(1)" class="btn btn-default" id="cell1"></button></th>
    <th><button onclick="myFunction(2)" class="btn btn-default" id="cell2"></button></th>
    <th><button onclick="myFunction(3)" class="btn btn-default" id="cell3"></button></th>
  </tr>
  <tr>
    <th><button onclick="myFunction(4)" class="btn btn-default" id="cell4"></button></th>
    <th><button onclick="myFunction(5)" class="btn btn-default" id="cell5"></button></th>
    <th><button onclick="myFunction(6)" class="btn btn-default" id="cell6"></button></th>
  </tr>
  <tr>
    <th><button onclick="myFunction(7)" class="btn btn-default" id="cell7"></button></th>
    <th><button onclick="myFunction(8)" class="btn btn-default" id="cell8"></button></th>
    <th><button onclick="myFunction(9)" class="btn btn-default" id="cell9"></button></th>
  </tr>
</table>	
</body>		
	<script type="text/javascript">

		var flip = 0;
		var turns = 0;
		var yes = 0;
		var player1 = [];
		var player2 = [];

		var player1 = [];
		var player2 = [];

		function blankchecker123()
		{
			var checker;
			var cell1 = document.getElementById("cell1").innerHTML;
			var cell2 = document.getElementById("cell2").innerHTML;
			var cell3 = document.getElementById("cell3").innerHTML;
			
			if (cell1 == "" || cell2 == "" || cell3 == "")
			{
				checker = true;
			}
			else
			{
				checker = false;
			}

			return checker;
		}

		function myFunction(btnNumber)
		{
			cellNum = "cell" + btnNumber;
			//alert(cellNum);
			btn = document.getElementById(cellNum);

			if (turns == 8)
			{	
				alert("It is a draw!");
			}	
			else if (flip == 0)
			{
				btn.innerHTML = "X";
				flip = 1;
				turns++;
				btn.disabled = true;
				//console.log(turns);
				player1.push(btnNumber);
				console.log(player1);
				if (turns > 1)
				{
					checker1();
					console.log(cell1);
					console.log(cell2);
					console.log(cell3);
				}
			}
			else if (flip == 1)
			{
				btn.innerHTML = "O";
				flip = 0;
				turns++;
				btn.disabled = true;
				player2.push(btnNumber);
				//console.log(turns);
				console.log(player2);
				if (turns > 1)
				{
					checker1();
					console.log(cell1);
					console.log(cell2);
					console.log(cell3);
				}
			}
			
		}

		function checker1()
		{
			var cell1 = document.getElementById("cell1").value;
			var cell2 = document.getElementById("cell2").value;
			var cell3 = document.getElementById("cell3").value;
			var cell4 = document.getElementById("cell4").value;
			var cell5 = document.getElementById("cell5").value;
			var cell6 = document.getElementById("cell6").value;
			var cell7 = document.getElementById("cell7").value;
			var cell8 = document.getElementById("cell8").value;
			var cell9 = document.getElementById("cell9").value;

			if (!blankchecker123())
			{
				if(cell1 == cell2 && cell2 == cell3 )
				{
					alert("Player " + cell1 + " has won!");
				}
			}

			
			// else if (cell1 == cell4 && cell3 == cell7)
			// {
			// 	alert("Player " + cell1 + " has won!");
			// }
			// else if (cell7 == cell8 && cell8 == cell9)
			// {
			// 	alert("Player " + cell7 + " has won!");
			// }
			// else if (cell3 == cell6 && cell6 == cell9)
			// {
			// 	alert("Player " + cell3 + " has won!");
			// }
			// else if (cell1 == cell5 && cell5 == cell9)
			// {
			// 	alert("Player " + cell1 + " has won!");
			// }
			// else if (cell7 == cell5 && cell5 == cell3)
			// {
			// 	alert("Player " + cell7 + " has won!");
			// }
		}

		function checker11()
		{
			allWins.forEach(function(wins)
			{
				var n = wins.includes(player1);

				if (n)
				{
					yes++;
				}
				console.log("Value is: " + yes);
			});
		}

	</script>
</html>