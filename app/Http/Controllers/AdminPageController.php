<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePageRequest;
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

    public function create(): Factory|View|Application
    {
        return view('admin.pages.create');
    }

    public function store(CreatePageRequest $request): RedirectResponse
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

            $this->pService->createPage($validated, $imagePath);

            return redirect()
                ->route('puslapiai.index')
                ->with('success', __('messages.successCreatePage'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
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

            return back()->with('success', __('messages.successUpdatePage'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $page = $this->pService->getPageById($id);

            if ($page->route == '' || $page->route == null) {
                return back()->with('error', __('messages.errorDeleteMainPage'));
            }

            $imagePath = public_path() . '/' . $page->image;
            $this->pService->checkAndDeleteImage($imagePath);

            $page->delete();

            return back()->with('success', __('messages.successDeletePage'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
