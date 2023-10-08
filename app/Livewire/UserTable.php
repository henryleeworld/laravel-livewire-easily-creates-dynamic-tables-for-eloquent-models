<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use RamonRietdijk\LivewireTables\Columns\Column;
use RamonRietdijk\LivewireTables\Columns\DateColumn;
use RamonRietdijk\LivewireTables\Columns\ImageColumn;
use RamonRietdijk\LivewireTables\Filters\DateFilter;
use RamonRietdijk\LivewireTables\Livewire\LivewireTable;

class UserTable extends LivewireTable
{
    protected string $model = User::class;

    protected function columns(): array
    {
        return [
            /*
            ImageColumn::make(__('Profile Photo'), 'profile_photo_path'),
            */

            Column::make(__('Name'), 'name')
                ->sortable()
                ->searchable(),

            Column::make(__('Email'), 'email')
                ->sortable()
                ->searchable(),

            DateColumn::make(__('Created At'), 'created_at')
                ->sortable()
                ->format('Y-m-d H:i:s'),

            DateColumn::make(__('Updated At'), 'updated_at')
                ->sortable()
                ->format('Y-m-d H:i:s'),
            /*
            Column::make(__('Actions'), function (Model $model): string {
                return '<a class="underline" href="#'.$model->getKey().'">Edit</a>';
            })
                ->clickable(false)
                ->asHtml(),
            */
        ];
    }

    protected function filters(): array
    {
        return [
            DateFilter::make(__('Created At'), 'created_at'),

            DateFilter::make(__('Updated At'), 'updated_at'),
        ];
    }

    protected function actions(): array
    {
        return [
        ];
    }
}