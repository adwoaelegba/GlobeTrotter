<?php
//include("../functions/budgetFunctions.php");
include("../ajax/script.php");
include("../actions/get_prices_action.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeTrotter-Budget</title>
    <!--<link rel="stylesheet" href="../css/budget.css">-->
    <!-- Font Awesome CDN link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
<header >
        <a href="#" class="brand">GlobeTrotter</a>
        <div class="nav">
            <div class="nav-items">
                <a href="../view/home.php">Home</a>
                <a href="../view/destination.php">Destinations</a>
                <a href="../view/book.php">Book trip</a>
                <a href="../view/budget.php">Budget calculator</a>
                <a href="#">Log out</a>
            </div>

        </div>
    </header>
<section class="main">
<h1 class="title">Budget Calculator</h1>
    <div class="container">
    <h2 class="heading">Calculate your expenses</h2>


    <form>

    <input type="text" id="number" name="number" placeholder="Enter Number">
    <input type="text" id="dur" name="dur" placeholder="Enter duration">
    <button type="submit" class="sub-btn" name="price" id="price" onclick="calculateCost('price');">Calculate</button>

    </form>
      <!--<form >
        <label for="countryDrop">Choose country</label>
       
        
            <input type="number" name="duration" id="duration" placeholder="Enter your duration">
            <button type="button" class="enter-btn"  onclick="calculateCost('price');">Calculate Cost</button>
        </form>-->

        

    
</div>

<div id="display"></div>
<!--<div id="content">
    <div class="calculator">
        <input type="text" placeholder="0" class="entry" id="output">
        <button class="calcBtn" onclick="Clear()">CL</button>
        <button class="calcBtn" onclick="del()">DEL</button>
        <button class="calcBtn" onclick="display('%')">%</button>
        <button  class="calcBtn" onclick="display('/')">/</button>
        <button class="calcBtn" onclick="display('7')">7</button>
        <button class="calcBtn" onclick="display('8')">8</button>
        <button class="calcBtn"  onclick="display('9')">9</button>
        <button class="calcBtn" onclick="display('*')">*</button>
        <button class="calcBtn" onclick="display('4')">4</button>
        <button class="calcBtn" onclick="display('5')">5</button>
        <button class="calcBtn" onclick="display('6')">6</button>
        <button class="calcBtn" onclick="display('-')">-</button>
        <button class="calcBtn" onclick="display('1')">1</button>
        <button class="calcBtn" onclick="display('2')">2</button>
        <button class="calcBtn" onclick="display('3')">3</button>
        <button class="calcBtn" onclick="display('+')">+</button>
        <button class="calcBtn" onclick="display('.')">.</button>
        <button class="calcBtn" onclick="display('0')">0</button>
        <button class="equal" onclick="Calculate()">=</button>
    </div>
           
        </div>

        <div id="alertContainer"></div>

</section>
    
<script>
let outputValue = document.getElementById("output");

function display(num){
    outputValue.value +=num;
}

function Calculate(){
    try{
        outputValue.value=eval(outputValue.value);
    }
    catch(err)
    {
        alert("Invalid")
    }
}

function Clear(){
    outputValue.value=" ";
}

function del(){
    outputValue.value= outputValue.value.slice(0,-1);
}

function showAlert(message, type) {
    // Create a new alert element
    const alertElement = document.createElement('div');
    alertElement.classList.add('alert', type);
    alertElement.textContent = message;

    // Append the alert element to the container
    const alertContainer = document.getElementById('alertContainer');
    alertContainer.appendChild(alertElement);

    // Automatically remove the alert after a certain duration (e.g., 3 seconds)
    setTimeout(() => {
        alertElement.remove();
    }, 3000); 
}


function compareValues() {
  
    let budget = parseFloat(document.getElementById("budget").value);

    
    let calculatorResult = parseFloat(outputValue.value);

   
    if (!isNaN(budget)) {
       
        if (calculatorResult > budget) {
            showAlert("Calculator result is greater than your budget.", "greater");
           
        } else if (calculatorResult < budget) {
            showAlert("Calculator result is greater than your budget.", "less");
    
        } else {
            showAlert("Calculator result is greater than your budget.", "equal");
           
        }
    } else {
        //alert("Please enter a valid budget.");
    }
}

</script>
-->

    
</body>

</html>