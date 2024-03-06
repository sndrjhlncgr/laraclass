<?php

namespace Laracrea\LaravelClassGenerator\Console;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class MakeClassCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:class';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new custom class, class with contructor, interface, abstract and enum';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'MyClass';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
       
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $namespace
     * @return string
     */
    protected function getDefaultNamespace($namespace)
    {
        return $namespace;
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [];
    }
}