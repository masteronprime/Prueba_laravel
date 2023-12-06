<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\CalculatedComision;
use App\Http\Requests\SalaryRequest;

class SalarioController extends Controller
{
        public function calculateSalary(SalaryRequest $request)
        { 
        
            $baseSalary = $request->base_salary;
            $workedDays = $request->worked_days;
            $salesAmount = $request->sales_amount;

            if ($workedDays >= 30){
                $commissionRate =CalculatedComision::calculateRate($salesAmount);
                $commission = $baseSalary * $commissionRate;
                $totalSalary = $baseSalary + $commission;

                $jsondata=[
                    'base_salary' => $baseSalary,
                    'worked_days' => $workedDays,
                    'sales_amount' => $salesAmount,
                    'calculated_salary' => $totalSalary,
                    'earned_commissions' => $commission,
                    'prorate_percentage' => 100,
                ];
        
        
                return response()->json($jsondata,200);
                }
            else{
                $commissionRate =CalculatedComision::calculateRate($salesAmount);
                $commission = $baseSalary * $commissionRate;
                $proratedSalary = ($baseSalary / 30) * $workedDays;
                $totalSalary = $proratedSalary + $commission;

                $jsondata=[
                    'base_salary' => $baseSalary,
                    'worked_days' => $workedDays,
                    'sales_amount' => $salesAmount,
                    'calculated_salary' => $totalSalary,
                    'earned_commissions' => $commission,
                    'prorate_percentage' => ($workedDays / 30) * 100,
                ];
        
        
                return response()->json($jsondata,200);
            }

        }
    
}
