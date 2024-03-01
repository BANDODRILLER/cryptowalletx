<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Purchases; // Make sure to import your Purchase model

class ProcessIncome extends Command
{
    protected $signature = 'income:process';
    protected $description = 'Process income for purchases';

    public function handle()
    {
        // Retrieve purchases where the current date is between begin and end dates
        $purchases = Purchases::whereDate('begin', '<=', now())
            ->whereDate('end', '>=', now())
            ->get();


        foreach ($purchases as $purchase) {
            // Calculate daily income
            $dailyIncome = $purchase->dyin;
            $dailyIncomekes = $purchase->dyin * 160;


            // Update withdrawn and available columns
            $purchase->withdrawn += $dailyIncomekes ;
            $purchase->available -= $dailyIncome;
            $purchase->save();
        }

        $this->info('Income processed successfully.');
    }
}
