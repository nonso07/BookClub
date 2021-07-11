<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookUpload\BulkDestroyBookUpload;
use App\Http\Requests\Admin\BookUpload\DestroyBookUpload;
use App\Http\Requests\Admin\BookUpload\IndexBookUpload;
use App\Http\Requests\Admin\BookUpload\StoreBookUpload;
use App\Http\Requests\Admin\BookUpload\UpdateBookUpload;
use App\Models\BookUpload;
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

class BookUploadController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexBookUpload $request
     * @return array|Factory|View
     */
    public function index(IndexBookUpload $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(BookUpload::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'Book_Titel', 'enabled'],

            // set columns to searchIn
            ['id', 'Book_Titel', 'booK_Summry']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.book-upload.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.book-upload.create');

        return view('admin.book-upload.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBookUpload $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreBookUpload $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
         //validated()
        // Store the BookUpload
        $bookUpload = BookUpload::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/book-uploads'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/book-uploads');
    }

    /**
     * Display the specified resource.
     *
     * @param BookUpload $bookUpload
     * @throws AuthorizationException
     * @return void
     */
    public function show(BookUpload $bookUpload)
    {
        $this->authorize('admin.book-upload.show', $bookUpload);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BookUpload $bookUpload
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(BookUpload $bookUpload)
    {
        $this->authorize('admin.book-upload.edit', $bookUpload);


        return view('admin.book-upload.edit', [
            'bookUpload' => $bookUpload,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBookUpload $request
     * @param BookUpload $bookUpload
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateBookUpload $request, BookUpload $bookUpload)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values BookUpload
        $bookUpload->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/book-uploads'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/book-uploads');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyBookUpload $request
     * @param BookUpload $bookUpload
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyBookUpload $request, BookUpload $bookUpload)
    {
        $bookUpload->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyBookUpload $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyBookUpload $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    BookUpload::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
