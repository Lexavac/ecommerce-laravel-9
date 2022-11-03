@extends('partials.tamplate')

@section('content')


<section class="section">
    <div class="section-header">
        <h1>Category List</h1>
    </div>
</section>
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-icon btn-info mb-3">
                        Add +
                    </a>
                    <table class="table-hover table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Desc</th>
                                <th scope="col">Slug</th>
                                {{-- <th scope="col">Product Count</th> --}}
                                <th scope="col">Image</th>
                                <th scope="col">Parent</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->desc }}</td>
                                <td>{{ $category->slug }}</td>
                                {{-- <td>{{ $category->products_count }}</td> --}}
                                <td>
                                    @if($category -> photo)
                                    <a href="{{ $category->photo->getUrl() }}" target="_blank">
                                        <img src="{{ $category->photo->getUrl() }}" width="75px" height="50px">
                                    </a>
                                    @else
                                    <span class="badge badge-warning">No Image</span>
                                    @endif
                                </td>
                                <td>{{ $category->parent->name ?? 'Null' }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>


                                        <form onclick="return confirm('are you sure ?');" action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
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
