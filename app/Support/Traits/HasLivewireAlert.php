<?php


namespace App\Support\Traits;


trait HasLivewireAlert
{
    public function showAlert(
        string $message,
        string $type = "error",
        string $title = "error!",
        array $options = [
        ])
    {
        $this->alert($type, $title, [
            'position' => $options['position'] ?? "bottom",
            'timer' => $options['timer'] ?? 3000,
            'toast' => false,
            'text' => $message,
            'confirmButtonText' => $options['confirmButtonText'] ?? 'OK',
            'cancelButtonText' => $options['cancelButtonText'] ?? 'Batalkan',
            'showCancelButton' => $options['showCancelButton'] ?? true,
            'showConfirmButton' => $options['showConfirmButton'] ?? false,
        ]);
    }


    public function showToast(
        string $message,
        string $type = "error",
        string $title = "error!",
        array $options = [
        ])
    {
        $this->alert($type, $title, [
            'position' => $options['position'] ?? "bottom",
            'timer' => $options['timer'] ?? 3000,
            'toast' => true,
            'text' => $message,
            'confirmButtonText' => $options['confirmButtonText'] ?? 'OK',
            'cancelButtonText' => $options['cancelButtonText'] ?? 'Batalkan',
            'showCancelButton' => $options['showCancelButton'] ?? true,
            'showConfirmButton' => $options['showConfirmButton'] ?? false,
        ]);
    }
}
