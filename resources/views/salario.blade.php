<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salario</title>
    <link rel="stylesheet" href="/css/salary.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Calculadora de Salario</h2>
    <form id="salaryForm">
        <label for="baseSalary">Salario Base:</label>
        <input type="number" id="baseSalary" name="base_salary" required><br>

        <label for="workedDays">Días Trabajados:</label>
        <input type="number" id="workedDays" name="worked_days" required><br>

        <label for="salesAmount">Ventas:</label>
        <input type="number" id="salesAmount" name="sales_amount" required><br>

        <button type="button" id="calculateButton">Calcular</button>
    </form>

    <div id="resultContainer">
        <h3>Resultado:</h3>
        <p id="baseSalaryResult"></p>
        <p id="workedDaysResult"></p>
        <p id="salesAmountResult"></p>
        <p id="calculatedSalaryResult"></p>
        <p id="earnedCommissionsResult"></p>
        <p id="proratePercentageResult"></p>
    </div>
</div>

</body>
<script>
    const salariourl = '{{ route('salario') }}';
</script>
<script src="{{ asset('js/salario.js') }}"></script>
</html>
