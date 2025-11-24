<?php

namespace App\Filament\Widgets;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Filament\Widgets\ChartWidget;

class Resturant extends ChartWidget
{
    protected ?string $heading = 'waiter login ';

protected function getData(): array
{
    // last 12 months waiter count
    $waiterStats = User::select(
            DB::raw('COUNT(id) as total'),
            DB::raw('MONTH(created_at) as month')
        )
        ->where('role', 'waiter')
        ->whereYear('created_at', now()->year)
        ->groupBy('month')
        ->pluck('total', 'month')
        ->toArray();

    // 1–12 month mapping
    $data = [];
    for ($m = 1; $m <= 12; $m++) {
        $data[] = $waiterStats[$m] ?? 0;
    }

    return [
        'datasets' => [
            [
                'label' => 'Waiter accounts created',
                'data' => $data,
            ],
        ],
        'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul',
                     'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    ];
}


    protected function getType(): string
    {
        return 'line';
    }
}
