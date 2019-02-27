<?php

namespace Livewire\Connection;

use Livewire\Livewire;

class HttpConnectionHandler extends ConnectionHandler
{
    public function __invoke()
    {
        return $this->handle(
            request('type'),
            request('data'),
            request('serialized')
        );
    }
}