<?php

namespace App\Filament\Widgets;

use App\Models\classes;
use App\Models\section;
use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Classes', classes::count()),
            Stat::make('Total Section', section::count()),
            Stat::make('Total Students', Student::count()),
        ];
    }
}
