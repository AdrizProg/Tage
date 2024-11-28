<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Los comandos Artisan proporcionados por la aplicación.
     *
     * @var array
     */
    protected $commands = [
        Commands\DispatchTestJobCommand::class,
    ];

    /**
     * Define la programación de tareas.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Ejemplo de una tarea programada que se ejecuta diariamente
        $schedule->command('inspire')->daily();

        // Agrega más tareas programadas aquí si es necesario
    }

    /**
     * Registra los eventos de inicio de la consola para la aplicación.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
