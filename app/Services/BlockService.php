<?php

namespace App\Services;

use App\Models\Block;
use Error;

class BlockService extends ImageService
{
    public final function getBlocks(): object
    {
        return Block::all()->sortBy('order');
    }

    public final function getBlockById(int $id): object
    {
        $block = Block::find($id);

        !$block && throw new Error('Failed to get block');

        return $block;
    }

    public final function createBlock(array $validated, string $imagePath): void
    {
        Block::firstOrCreate([
            'name' => $validated['name'],
            'title' => $validated['title'],
            'text' => $validated['text'] ?? NULL,
            'image' => $imagePath ? $imagePath : NULL,
            'experience_years' => $validated['experience_years'] ?? 0,
            'show_experience' => $validated['show_experience'],
            'order' => $validated['order'],
            'block_type_id' => $validated['block_type_id'],
            'created_at' => now()
        ]);
    }

    public final function updateBlock(object $block, array $validated, ?string $imagePath): void
    {
        $block->name = $validated['name'];
        $block->title = $validated['title'];
        $block->text = $validated['text'] ?? NULL;
        $imagePath && $block->image = $imagePath;
        $block->experience_years = $validated['show_experience'] == 1 ? $validated['experience_years'] : 0;
        $block->show_experience = $validated['show_experience'];
        $block->order = $validated['order'];
        $block->block_type_id = $validated['block_type_id'];
        $block->updated_at = now();
        $block->save();
    }
}
