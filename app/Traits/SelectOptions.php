<?php

namespace App\Traits;

use App\Models\BlockType;

trait SelectOptions
{
    public final function blockTypeOptions(): array
    {
        $blockTypeOptions = [];
        $blockTypes = BlockType::all();

        foreach ($blockTypes as $blockType) {
            $blockTypeOptions[$blockType->id] = $blockType->name;
        }

        return $blockTypeOptions;
    }
}
