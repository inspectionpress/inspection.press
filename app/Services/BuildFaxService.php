<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class BuildFaxService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = \App\Models\Company::first()->buildfax_api_key;
    }

    public function fetchPropertyData(array $address)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
        ])->get('https://api.buildfax.com/property-insight', $address);

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }

    public function downloadPermitPdf(string $reportUrl, string $filename): ?string
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
        ])->get($reportUrl);

        if ($response->successful()) {
            $path = 'public/permits/' . $filename;
            Storage::put($path, $response->body());
            return Storage::url($path);
        }

        return null;
    }
}
