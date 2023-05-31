<?php

namespace App\Filament\Resources\AppointmentResource\Pages;

use App\Filament\Resources\AppointmentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Http\RedirectResponse;

class EditAppointment extends EditRecord
{
    protected static string $resource = AppointmentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('period-appointment')
                ->label('Đặt lịch khám lại')
                ->action('createPeriodAppointment')
                ->requiresConfirmation()
        ];
    }

    public function createPeriodAppointment()
    {
        $newAppointment = $this->record->replicate();
        $newAppointment->note = 'Lịch khám lại';
        $newAppointment->save();
        return redirect()->route('filament.resources.appointments.edit', $newAppointment->id);
    }
}
