@extends('partials.tamplate')

@section('content')


<section class="section">
    <div class="section-header">
        <h1>tag List</h1>
    </div>
</section>
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.carts.index') }}" class="btn btn-icon btn-info mb-3">
                        Add +
                    </a>
                    <table class="table-hover table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Product Count</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tags as $tag)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $tag->name }}</td>
                                <td>{{ $tag->slug }}</td>
                                <td>{{ $tag->products_count }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>


                                        <form onclick="return confirm('are you sure ?');" action="{{ route('admin.tags.destroy', $tag->id) }}" method="post">
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
