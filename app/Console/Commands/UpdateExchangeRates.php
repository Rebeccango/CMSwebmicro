<?php

namespace App\Console\Commands;
use App\ExchangeRate;
use Illuminate\Console\Command;

class UpdateExchangeRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:exchangerates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the Exchange Rates';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $rate = ['sourceCurrency' => 'CAD', 'targetCurrency' => 'USD'];
        ExchangeRate::updateOrCreate($rate, ["rate" => $this->getTodayExchangeRate($rate['targetCurrency'], $rate['sourceCurrency'])->rates->{$rate['targetCurrency']}]);

        $rate = ['sourceCurrency' => 'USD', 'targetCurrency' => 'CAD'];
        ExchangeRate::updateOrCreate($rate, ["rate" => $this->getTodayExchangeRate($rate['targetCurrency'], $rate['sourceCurrency'])->rates->{$rate['targetCurrency']}]);

        $this->output->write('Updated today\'s Exchange Rates', false);
    }

    private function getTodayExchangeRate($from, $to)
    {
        $i =0;
        while ($i < 10) {
            if (!$conversion = @file_get_contents('https://api.exchangeratesapi.io/latest?symbols=' . $from . '&base=' . $to)) {
                return json_decode($conversion);
            }
            $i++;
            usleep(1000);
        }

        return json_decode(file_get_contents('https://api.exchangeratesapi.io/latest?symbols=' . $from . '&base=' . $to));
    }
}
