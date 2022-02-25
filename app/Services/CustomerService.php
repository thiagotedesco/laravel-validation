<?php

namespace App\Services;

use App\Repositories\Contracts\CustomerRepositoryInterface;

class CustomerService
{
    protected $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    /**
     * Service Layer - Get a listing of the resource.
     *
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {
       return $this->customerRepository->all();
    }

    /**
     * Service Layer - Store a newly created resource in storage.
     *
     * @return \Illuminate\Support\Collection
     */
    public function store($request)
    {
        return $this->customerRepository->create($request);
    }

    /**
     * Service Layer - Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Support\Collection
     */
    public function show($id)
    {
        return $this->customerRepository->find($id);
    }

    /**
     * Service Layer - Update the specified resource in storage.
     *
     * @param  array  $request
     * @param  int  $id
     * @return \Illuminate\Support\Collection
     */
    public function update($request, $id)
    {
        return $this->customerRepository->update($request, $id);
    }

    /**
     * Service Layer - Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Support\Collection
     */
    public function destroy($id)
    {
        return $this->customerRepository->delete($id);
    }


}
