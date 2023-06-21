<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlockRequest;
use App\Http\Requests\UpdateBlockRequest;
use App\Services\BlockService;
use App\Services\PageService;
use App\Traits\SelectOptions;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminBlockController extends Controller
{
    use SelectOptions;

    public function __construct(
        private PageService $pService,
        private BlockService $bService
    ) {
    }

    public function addBlock(int $id): Factory|View|Application
    {
        return view('admin.pages.add_block')
            ->with([
                'blockTypes' => $this->blockTypeOptions(),
                'page' => $this->pService->getPageById($id)
            ]);
    }

    public function addBlockSave(int $id, CreateBlockRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        try {
            $imagePath = null;

            if (isset($validated['image'])) {
                $dirPath = public_path() . '/images/uploads';
                $imageName = $this->pService->getImageName($validated['image']);
                $imagePath = $this->pService->getImagePath($imageName);

                $this->pService->checkAndCreateDirectory($dirPath);
                $this->pService->uploadFileToDirectory($validated['image'], $dirPath, $imageName);
            }

            $this->bService->createBlock($validated, $imagePath);

            return redirect(route('puslapiai.edit', $id))
                ->with('success', __('messages.successCreateBlock'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function editBlock(int $pageId, int $blockId): Factory|View|Application
    {
        return view('admin.pages.edit_block')
            ->with([
                'page' => $this->pService->getPageById($pageId),
                'block' => $this->bService->getBlockById($blockId),
                'blockTypes' => $this->blockTypeOptions()
            ]);
    }

    public function editBlockSave(int $pageId, int $blockId, UpdateBlockRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        try {
            $block = $this->bService->getBlockById($blockId);
            $imagePath = null;

            if (isset($validated['image'])) {
                $dirPath = public_path() . '/images/uploads';
                $imageName = $this->pService->getImageName($validated['image']);
                $imagePath = $this->pService->getImagePath($imageName);

                $this->pService->checkAndCreateDirectory($dirPath);
                $this->pService->uploadFileToDirectory($validated['image'], $dirPath, $imageName);
            }

            $this->bService->updateBlock($block, $validated, $imagePath);

            return redirect(route('puslapiai.edit', $pageId))
                ->with('success', __('messages.successUpdateBlock'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function deleteBlock(int $pageId, int $blockId): RedirectResponse
    {
        try {
            $block = $this->bService->getBlockById($blockId);
            $block->delete();

            return redirect(route('puslapiai.edit', $pageId))
                ->with('success', __('messages.successDeleteBlock'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
