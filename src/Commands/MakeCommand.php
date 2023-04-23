<?php

namespace SmirlTech\LaravelForm\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Livewire\Commands\ComponentParser;
use Livewire\Commands\MakeCommand as LivewireMakeCommand;

class MakeCommand extends Command
{
    public $signature = 'make:form
        {name : The name of your Livewire class}
        {--force}';

    public $description = 'Generate a Laravel Livewire form class';
    private ComponentParser $parser;

    public function handle(): void
    {
        $this->parser = new ComponentParser(
            config('livewire.class_namespace'),
            config('livewire.view_path'),
            $this->argument('name')
        );

        $livewireMakeCommand = new LivewireMakeCommand();

        if ($livewireMakeCommand->isReservedClassName($name = $this->parser->className())) {
            $this->line("<fg=red;options=bold>Class is reserved:</> {$name}");

            return;
        }

        $force = $this->option('force');

        $this->createClass($force);

        $this->info('Livewire From Created: ' . $this->parser->className());
    }

    /**
     * @param bool $force
     *
     * @return bool
     */
    protected function createClass(bool $force = false): bool
    {
        $classPath = $this->parser->classPath();

        if (!$force && File::exists($classPath)) {
            $this->line("<fg=red;options=bold>Class already exists:</> {$this->parser->relativeClassPath()}");

            return false;
        }

        $this->ensureDirectoryExists($classPath);

        File::put($classPath, $this->classContents());

        return $classPath;
    }

    /**
     * @param mixed $path
     *
     * @return void
     */
    protected function ensureDirectoryExists($path): void
    {
        if (!File::isDirectory(dirname($path))) {
            File::makeDirectory(dirname($path), 0777, true, true);
        }
    }

    /**
     * @return string
     */
    public function classContents(): string
    {
        return str_replace(
            ['[namespace]', '[class]'],
            [$this->parser->classNamespace(), $this->parser->className()],
            file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'form.stub')
        );
    }

}
