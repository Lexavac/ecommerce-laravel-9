@extends('partials.tamplate')

@section('content')


<section class="section">
    <div class="section-header">
        <h1>product List</h1>
    </div>
</section>
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.products.create') }}" class="btn btn-icon btn-info mb-3">
                        Add +
                    </a>
                    <table class="table-hover table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Tag</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Desc</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->Category->name }}</td>
                                <td>
                                    @foreach($product->tags as $tag)
                                    <span class="badge badge-warning">{{ $tag->name }}</span>
                                    @endforeach
                                </td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->desc }}</td>
                                <td>{{ $product->slug }}</td>
                                <td>
                                    @if(count($product->gallery)  > 0)
                                    <a href="{{ $product->getMedia('gallery')->first()->getUrl() }}" target="_blank">
                                        <img src="{{ $product->getMedia('gallery')->first()->getUrl() }}" width="75px" height="50px" alt="">
                                    </a>
                                    @else
                                        <span class="badge badge-warning">No Image</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-warning">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>


                                        <form onclick="return confirm('are you sure ?');" action="{{ route('admin.products.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>

                            @endforeach
                        </tbody>
                    </table>


@endsection
