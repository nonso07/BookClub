<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookType\BulkDestroyBookType;
use App\Http\Requests\Admin\BookType\DestroyBookType;
use App\Http\Requests\Admin\BookType\IndexBookType;
use App\Http\Requests\Admin\BookType\StoreBookType;
use App\Http\Requests\Admin\BookType\UpdateBookType;
use App\Models\BookType;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BookTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexBookType $request
     * @return array|Factory|View
     */
    public function index(IndexBookType $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(BookType::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'Book_catigory', 'enabled'],

            // set columns to searchIn
            ['id', 'Book_catigory']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.book-type.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.book-type.create');

        return view('admin.book-type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBookType $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreBookType $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the BookType
        $bookType = BookType::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/book-types'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/book-types');
    }

    /**
     * Display the specified resource.
     *
     * @param BookType $bookType
     * @throws AuthorizationException
     * @return void
     */
    public function show(BookType $bookType)
    {
        $this->authorize('admin.book-type.show', $bookType);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BookType $bookType
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(BookType $bookType)
    {
        $this->authorize('admin.book-type.edit', $bookType);


        return view('admin.book-type.edit', [
            'bookType' => $bookType,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBookType $request
     * @param BookType $bookType
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateBookType $request, BookType $bookType)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values BookType
        $bookType->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/book-types'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/book-types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyBookType $request
     * @param BookType $bookType
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyBookType $request, BookType $bookType)
    {
        $bookType->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyBookType $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyBookType $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    BookType::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
