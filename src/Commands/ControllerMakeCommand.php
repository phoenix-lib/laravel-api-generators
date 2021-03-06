<?php

namespace Jenky\LaravelApiGenerators\Commands;

use Jenky\LaravelApiGenerators\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class ControllerMakeCommand extends GeneratorCommand
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'make:api:controller';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Create a new API controller class';

    /**
     * {@inheritdoc}
     */
    protected $type = 'Controller';

    /**
     * {@inheritdoc}
     */
    protected function getStub()
    {
        if ($this->option('model')) {
            return __DIR__.'/../../stubs/controller.resource.stub';
        }

        return __DIR__.'/../../stubs/controller.stub';
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Http\Controllers';
    }

    /**
     * {@inheritdoc}
     */
    protected function getOptions()
    {
        return [
            ['model', 'm', InputOption::VALUE_OPTIONAL, 'Generate controller class with a resource model name.'],
        ];
    }
}
