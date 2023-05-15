<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePageRequest;
use App\Services\BlockService;
use App\Services\PageService;
use App\Traits\SelectOptions;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    use SelectOptions;

    public function __construct(private PageService $pService, private BlockService $bService)
    {
    }

    public function index(): Factory|View|Application
    {
        return view('admin.pages.index')
            ->with('pages', $this->pService->getPages());
    }

    public function edit(int $id): Factory|View|Application
    {
        return view('admin.pages.edit')
            ->with([
                'page' => $this->pService->getPageById($id),
                'blocks' => $id === 1 ? $this->bService->getBlocks() : []
            ]);
    }

    public function update(int $id, UpdatePageRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        try {
            $page = $this->pService->getPageById($id);
            $imagePath = null;

            if (isset($validated['image'])) {
                $dirPath = public_path() . '/images/uploads';
                $imageName = $this->pService->getImageName($validated['image']);
                $imagePath = $this->pService->getImagePath($imageName);

                $this->pService->checkAndCreateDirectory($dirPath);
                $this->pService->uploadFileToDirectory($validated['image'], $dirPath, $imageName);
            }

            $this->pService->updatePage($page, $validated, $imagePath);

            return back()->with('success', __('Puslapis sėkmingai atnaujintas ir išsaugotas'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
