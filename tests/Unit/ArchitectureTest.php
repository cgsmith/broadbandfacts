<?php
/**
 * ArchitectureTest
 *
 * These tests are meant to enforce architectural rules for the entire application.
 */

// Ensure that debugging functions are not used in production.
test('Debugging functions are not used in production')
    ->expect(['dd', 'dump', 'var_dump', 'print_r', 'error_log', 'phpinfo', 'xdebug_'])
    ->not->toBeUsed();

test('Abstracts are abstract classes')
    ->expect('App\Abstracts')
    ->classes()
    ->toBeAbstract();

test('Contracts are interfaces')
    ->expect('App\Contracts')
    ->classes()
    ->toBeInterfaces();

test('app uses strict types')
    ->expect('App')
    ->toUseStrictTypes();
