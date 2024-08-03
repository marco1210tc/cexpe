<?php

namespace App\Listeners;

use App\Events\PeopleSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;


class OptimizePeopleImage implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PeopleSaved $event): void
    {
        //optimizar la imagen guardada
        $image = Image::read(Storage::get($event->person->cPerImage))
            ->scale(width: 600)
            ->reduceColors(255)
            ->encode();

        //sobreescribimos la imagen
        Storage::put($event->person->cPerImage, (string) $image);
    }
}
