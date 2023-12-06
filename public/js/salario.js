$(document).ready(function () {
    $('#calculateButton').on('click', function () {
        // Retrieve data from the form
        var formData = {
            'base_salary': $('#baseSalary').val(),
            'worked_days': $('#workedDays').val(),
            'sales_amount': $('#salesAmount').val()
        };

        // Send data to the API using Ajax
        $.ajax({
            type: 'POST',
            url: salariourl,
            data: formData,
            success: function (data) {
                // Handle the API response
                console.log(data);

                // Display results in the result container
                $('#baseSalaryResult').text('Salario Base: ' + data.base_salary);
                $('#workedDaysResult').text('Días Trabajados: ' + data.worked_days);
                $('#salesAmountResult').text('Ventas: ' + data.sales_amount);
                $('#calculatedSalaryResult').text('Salario Calculado: ' + data.calculated_salary);
                $('#earnedCommissionsResult').text('Comisiones Ganadas: ' + data.earned_commissions);
                $('#proratePercentageResult').text('Porcentaje de Prorrateo: ' + data.prorate_percentage + '%');
            },
            error: function (error) {
                // Handle errors
                console.error('Error en la solicitud: ', error.responseJSON);
            }
        });
    });
});
