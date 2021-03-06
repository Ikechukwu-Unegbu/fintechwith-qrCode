<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetransactionRequest;
use App\Http\Requests\UpdatetransactionRequest;
use App\Repositories\transactionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class transactionController extends AppBaseController
{
    /** @var  transactionRepository */
    private $transactionRepository;

    public function __construct(transactionRepository $transactionRepo)
    {
        $this->transactionRepository = $transactionRepo;
    }

    /**
     * Display a listing of the transaction.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->transactionRepository->pushCriteria(new RequestCriteria($request));
        $transactions = $this->transactionRepository->all();

        return view('transactions.index')
            ->with('transactions', $transactions);
    }

    /**
     * Show the form for creating a new transaction.
     *
     * @return Response
     */
    public function create()
    {
        return view('transactions.create');
    }

    /**
     * Store a newly created transaction in storage.
     *
     * @param CreatetransactionRequest $request
     *
     * @return Response
     */
    public function store(CreatetransactionRequest $request)
    {
        $input = $request->all();

        $transaction = $this->transactionRepository->create($input);

        Flash::success('Transaction saved successfully.');

        return redirect(route('transactions.index'));
    }

    /**
     * Display the specified transaction.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transaction = $this->transactionRepository->findWithoutFail($id);

        if (empty($transaction)) {
            Flash::error('Transaction not found');

            return redirect(route('transactions.index'));
        }

        return view('transactions.show')->with('transaction', $transaction);
    }

    /**
     * Show the form for editing the specified transaction.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transaction = $this->transactionRepository->findWithoutFail($id);

        if (empty($transaction)) {
            Flash::error('Transaction not found');

            return redirect(route('transactions.index'));
        }

        return view('transactions.edit')->with('transaction', $transaction);
    }

    /**
     * Update the specified transaction in storage.
     *
     * @param  int              $id
     * @param UpdatetransactionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetransactionRequest $request)
    {
        $transaction = $this->transactionRepository->findWithoutFail($id);

        if (empty($transaction)) {
            Flash::error('Transaction not found');

            return redirect(route('transactions.index'));
        }

        $transaction = $this->transactionRepository->update($request->all(), $id);

        Flash::success('Transaction updated successfully.');

        return redirect(route('transactions.index'));
    }

    /**
     * Remove the specified transaction from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transaction = $this->transactionRepository->findWithoutFail($id);

        if (empty($transaction)) {
            Flash::error('Transaction not found');

            return redirect(route('transactions.index'));
        }

        $this->transactionRepository->delete($id);

        Flash::success('Transaction deleted successfully.');

        return redirect(route('transactions.index'));
    }
}
