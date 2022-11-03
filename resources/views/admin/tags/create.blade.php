@extends('partials.tamplate')

@section('content')


<section class="section">
    <div class="section-header">
        <h1>Create Table</h1>
    </div>
</section>
            <div class="card">
                <div class="card-body ">
                    <a href="{{ route('admin.tags.index') }}" class="btn btn-icon btn-info mb-3">
                        Back
                    </a>
                        <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                            <div class="card-header">
                                <h4>Create Data Table</h4>
                            </div>

                            <form action="{{ route('admin.tags.store') }}" method="POST" class="card-body">
                                @csrf
                                <div class="alert alert-info">
                                <b>Note!</b> Please Input valid
                                </div>
                                
                                <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                    <button class="btn btn-secondary" type="reset">Reset</button>
                                </div>
                            </form>


                        </tbody>
                    </table>

                    @endsection
