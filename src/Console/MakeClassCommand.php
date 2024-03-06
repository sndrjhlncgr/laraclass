<?php

namespace Laracrate\Generator\Console;

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
        if ($this->option('constructor')) {
            return __DIR__.'/stubs/class.constructor.stub';
        }

        if ($this->option('interface')) {
            return __DIR__.'/stubs/interface.stub';
        }

        if ($this->option('abstract')) {
            return __DIR__.'/stubs/abstract.class.stub';
        }

        if ($this->option('enum')) {
            return __DIR__.'/stubs/enum.stub';
        }

        return __DIR__.'/stubs/class.stub';
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
        return [
            ['force', 'f', InputOption::VALUE_NONE, 'Create the class even if the class already exists'],
            ['constructor', 'c', InputOption::VALUE_NONE, 'Create a new class with constructor'],
            ['interface', 'i', InputOption::VALUE_NONE, 'Create a new interface class'],
            ['abstract', 'a', InputOption::VALUE_NONE, 'Create a new abstract class'],
            ['enum', 'e', InputOption::VALUE_NONE, 'Create a new enum'],
        ];
    }
}