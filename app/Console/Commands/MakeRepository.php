<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class MakeRepository extends Command
{
    protected $signature = 'make:repository {model}';
    protected $description = 'Create a new repository for a model';

    public function handle()
    {
        $modelName = $this->argument('model');
        $repositoryName = Str::studly($modelName) . 'Repository';

        $this->call('make:model', ['name' => "Models\\{$modelName}"]);
        $this->call('make:repository-class', ['name' => "Repositories\\{$repositoryName}"]);
    }
}
