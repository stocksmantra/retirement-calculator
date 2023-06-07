function calculateRetirementYears() {
    const initialSavings = parseFloat(document.getElementById("initialSavings").value);
    const annualSavings = parseFloat(document.getElementById("annualSavings").value);
    const annualInterestRate = parseFloat(document.getElementById("annualInterestRate").value) / 100;
    const desiredRetirementIncome = parseFloat(document.getElementById("desiredRetirementIncome").value);
  
    let currentSavings = initialSavings;
    let years = 0;
  
    while (currentSavings < desiredRetirementIncome) {
      currentSavings += annualSavings;
      currentSavings *= 1 + annualInterestRate;
      years++;
    }
  
    document.getElementById("result").innerHTML = `It will take ${years} years to reach your desired retirement income.`;
  }