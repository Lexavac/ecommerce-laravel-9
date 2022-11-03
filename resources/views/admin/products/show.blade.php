@extends('partials.tamplate')

@section('content')


<section class="section">
    <div class="section-header">
        <h1>product List</h1>
    </div>
</section>
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.products.index') }}" class="btn btn-icon btn-info mb-3">
                        Back
                    </a>
                    <table class="table-hover table">
                        <tbody>
                            <tr>
                                <th>Images</th>
                                <td colspan="6"></td>
                            </tr>
                            <tr>
                                @forelse($product->getMedia('gallery') as $gallery)
                                    <th class="col-lg-3 col-md-4 col-sm-6">
                                        <a href="{{ $gallery->getFullUrl() }}">
                                            <img src="{{ $gallery->getFullUrl() }}" alt="{{ $product->name }}" class="img-fluid">
                                        </a>
                                    </th>
                                @empty
                                    <th>
                                        <span class="badge badge-warning">no image</span>
                                    </th>
                                @endforelse
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td colspan="6">{{ $product->desc }}</td>
                            </tr>
                        </tbody>
                    </table>


@endsection
