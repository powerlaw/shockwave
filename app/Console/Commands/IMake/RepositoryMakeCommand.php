<?php

namespace App\Console\Commands\IMake;

use Illuminate\Console\Command;

class RepositoryMakeCommand extends IMakeCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'imake:repository {name} {--delete}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new resource repository class';

    public $directory = 'Repositories/';

}
