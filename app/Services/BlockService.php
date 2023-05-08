<?php

namespace App\Services;

use App\Models\Block;

class BlockService extends ImageService
{
    public final function getBlocks(): object
    {
        return Block::all()->sortBy('order');
    }
}