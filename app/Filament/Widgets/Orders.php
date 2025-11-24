<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use App\Models\Reservations;
use App\Models\Table;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Orders extends StatsOverviewWidget
{
    protected function getStats(): array
    {
 return [
            Stat::make('Orders', Order::count())
             ->color('success')
            ->description('New orders this week')
            ->chart(
                Order::selectRaw('COUNT(id) as total')
                    ->whereBetween('created_at', [now()->subDays(7), now()])
                    ->groupByRaw('DATE(created_at)')
                    ->pluck('total')
                    ->toArray()),
            Stat::make('Reservations',Reservations::count())
            ->color('success')
            ->description('New Reservatio has been created')
            ->chart(
                Reservations::selectRaw('COUNT(id) as total')
                ->whereBetween('created_at',[now()->subDays(7), now()])                    ->groupByRaw('DATE(created_at)')
                    ->pluck('total')
                    ->toArray()
            ),
            Stat::make('Tables', Table::count())
            ->description('Added New tables')
            ->chart([4,8,12,16]),
        ];
    }
}
