<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Receipt\BulkDestroyReceipt;
use App\Http\Requests\Admin\Receipt\DestroyReceipt;
use App\Http\Requests\Admin\Receipt\IndexReceipt;
use App\Http\Requests\Admin\Receipt\StoreReceipt;
use App\Http\Requests\Admin\Receipt\UpdateReceipt;
use App\Models\Receipt;
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

class ReceiptsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexReceipt $request
     * @return array|Factory|View
     */
    public function index(IndexReceipt $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Receipt::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'first_name', 'last_name', 'Department', 'Reg_no', 'phoneNum', 'trans_id', 'amount', 'fees', 'Receipt_plan', 'enabled'],

            // set columns to searchIn
            ['id', 'first_name', 'last_name', 'Department', 'Reg_no', 'phoneNum', 'trans_id', 'Receipt_plan']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.receipt.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.receipt.create');

        return view('admin.receipt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreReceipt $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreReceipt $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Receipt
        $receipt = Receipt::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/receipts'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/receipts');
    }

    /**
     * Display the specified resource.
     *
     * @param Receipt $receipt
     * @throws AuthorizationException
     * @return void
     */
    public function show(Receipt $receipt)
    {
        $this->authorize('admin.receipt.show', $receipt);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Receipt $receipt
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Receipt $receipt)
    {
        $this->authorize('admin.receipt.edit', $receipt);


        return view('admin.receipt.edit', [
            'receipt' => $receipt,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateReceipt $request
     * @param Receipt $receipt
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateReceipt $request, Receipt $receipt)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Receipt
        $receipt->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/receipts'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/receipts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyReceipt $request
     * @param Receipt $receipt
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyReceipt $request, Receipt $receipt)
    {
        $receipt->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyReceipt $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyReceipt $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Receipt::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
