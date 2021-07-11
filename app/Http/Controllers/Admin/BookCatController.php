<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookCat\BulkDestroyBookCat;
use App\Http\Requests\Admin\BookCat\DestroyBookCat;
use App\Http\Requests\Admin\BookCat\IndexBookCat;
use App\Http\Requests\Admin\BookCat\StoreBookCat;
use App\Http\Requests\Admin\BookCat\UpdateBookCat;
use App\Models\BookCat;
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

class BookCatController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexBookCat $request
     * @return array|Factory|View
     */
    public function index(IndexBookCat $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(BookCat::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'Book_Titel', 'booK_type', 'enabled'],

            // set columns to searchIn
            ['id', 'Book_Titel', 'booK_type', 'booK_Summry']
        );
        // add drowpdowen code from here from BookType model
        $booksArry= BookType::where('enabled', 1)
        ->orderBy('id')
        ->get();
       $bookTypeArray=[];

        foreach($booksArry as $bookElement){
           $arryElement= $bookElement->Book_catigory;
           array_push($bookTypeArray, $arryElement);
        }
        

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.book-cat.index', [
            'data' => $data,
             'bookTypeArray'=> $bookTypeArray
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.book-cat.create');

        $booksArry= BookType::where('enabled', 1)
        ->orderBy('id')
        ->get();
       $bookTypeArray=[];

        foreach($booksArry as $bookElement){
           $arryElement= $bookElement->Book_catigory;
           array_push($bookTypeArray, $arryElement);
        }

        return view('admin.book-cat.create',[
            'bookTypeArray'=> $bookTypeArray
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBookCat $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreBookCat $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the BookCat
        $bookCat = BookCat::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/book-cats'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/book-cats');
    }

    /**
     * Display the specified resource.
     *
     * @param BookCat $bookCat
     * @throws AuthorizationException
     * @return void
     */
    public function show(BookCat $bookCat)
    {
        $this->authorize('admin.book-cat.show', $bookCat);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BookCat $bookCat
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(BookCat $bookCat)
    {
        $this->authorize('admin.book-cat.edit', $bookCat);

        $booksArry= BookType::where('enabled', 1)
        ->orderBy('id')
        ->get();
       $bookTypeArray=[];

        foreach($booksArry as $bookElement){
           $arryElement= $bookElement->Book_catigory;
           array_push($bookTypeArray, $arryElement);
        }



        return view('admin.book-cat.edit', [
            'bookCat' => $bookCat,
            'bookTypeArray'=> $bookTypeArray
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBookCat $request
     * @param BookCat $bookCat
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateBookCat $request, BookCat $bookCat)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values BookCat
        $bookCat->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/book-cats'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/book-cats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyBookCat $request
     * @param BookCat $bookCat
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyBookCat $request, BookCat $bookCat)
    {
        $bookCat->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyBookCat $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyBookCat $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    BookCat::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
