<?php

namespace App\Filament\Widgets;

use App\Models\Inventories;
use Filament\Widgets\ChartWidget;

class Products extends ChartWidget
{
    protected ?string $heading = 'Inventories';

    protected function getData(): array
    {
        // Fetch all inventory items
        $inventories = Inventories::select('name', 'quantity')->get();

        // Labels = product names
        $labels = $inventories->pluck('name')->toArray();

        // Data = product quantities
        $data = $inventories->pluck('quantity')->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Inventory Quantity',
                    'data' => $data,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
