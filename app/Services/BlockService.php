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

        !$block && throw new Error('messages.errorGetBlock');

        return $block;
    }

    public final function createBlock(array $validated, string $imagePath): void
    {
        Block::create([
            'lt' => [
                'name' => $validated['name_lt'],
                'title' => $validated['title_lt'],
                'text' => $validated['text_lt'] ?? NULL,
            ],
            'en' => [
                'name' => $validated['name_en'],
                'title' => $validated['title_en'],
                'text' => $validated['text_en'] ?? NULL,
            ],
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
        foreach (config('translatable.locales') as $locale) {
            $block->translate($locale)->name = $validated["name_$locale"];
            $block->translate($locale)->title = $validated["title_$locale"];
            $block->translate($locale)->text = $validated["text_$locale"] ?? NULL;
        }
        $imagePath && $block->image = $imagePath;
        $block->experience_years = $validated['show_experience'] == 1 ? $validated['experience_years'] : 0;
        $block->show_experience = $validated['show_experience'];
        $block->order = $validated['order'];
        $block->block_type_id = $validated['block_type_id'];
        $block->updated_at = now();
        $block->save();
    }
}
