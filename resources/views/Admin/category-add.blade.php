@extends('admin.layouts.master')

@section('content')


                <div class="col-md-12 text-center d-flex">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                        <div class="card bg-info">
                            <div class="card-body ">
                                <label for="caregory" class="my-4">
                                    <h2 class="text-center text-light">Type Category</h2>
                                </label>
                                <input type="text" name="category" class="form-control" id="category">
                                <form action="" class="d-flex justify-content-center mt-4 py-4">
                                    <button type="submit" class="btn btn-light mx-2">Create Category</button>
                                    <button type="reset" class="btn btn-dark mx-2">Cancle</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

@endsection