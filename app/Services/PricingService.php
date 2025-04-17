<?php
namespace App\Services;

use App\Models\Company;
use App\Models\Service;

class PricingService
{
    public function calculate(Company $company, array $serviceIds, int $squareFeet, int $yearBuilt, float $mileage = 0): float
    {
        $base = Service::whereIn('id', $serviceIds)->sum('base_price');

        // Property age surcharge (example: add $50 if older than 1970)
        $ageSurcharge = ($yearBuilt < 1970) ? 50 : 0;

        // Square footage surcharge (example: $0.10 per sq ft over 2500)
        $sizeSurcharge = ($squareFeet > 2500) ? ($squareFeet - 2500) * 0.10 : 0;

        // Mileage charge (placeholder — adjust later with real distance logic)
        $mileageSurcharge = $mileage * 1.00; // $1 per mile

        return round($base + $ageSurcharge + $sizeSurcharge + $mileageSurcharge, 2);
    }
}
