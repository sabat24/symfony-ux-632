<?php

namespace App\Controller;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveArg;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('demo_live')]
final class DemoLiveComponent
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public int $page = 1;

    #[LiveAction]
    public function updatePage(#[LiveArg] int $page): void
    {
        $this->page = $page;
    }
}
