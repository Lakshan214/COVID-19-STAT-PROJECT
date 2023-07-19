<?php

namespace App\Console\Commands;

use App\Models\CovidData;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class FetchCovidData extends Command
{
    protected $signature = 'coviddata:fetch';
    protected $description = 'Fetch COVID-19 data from the API and save to the database';

    public function handle()
    {
        $response = Http::get('https://hpb.health.gov.lk/api/get-current-statistical');
        $data = $response->json();

        if (isset($data['data'])) {
            $covidData = [
                'report_date' => $data['data']['update_date_time'],
                'total_cases' => $data['data']['local_total_cases'],
                'new_cases' => $data['data']['local_new_cases'],
                'total_deaths' => $data['data']['local_deaths'],
                'new_deaths' => $data['data']['local_new_deaths'],
                'total_recovered' => $data['data']['local_recovered'],
                'active_cases' => $data['data']['local_active_cases'],
            ];

            CovidData::create($covidData);

            $this->info('COVID-19 data fetched and saved successfully!');
        } else {
            $this->error('Failed to fetch COVID-19 data from the API.');
        }
    }
}

