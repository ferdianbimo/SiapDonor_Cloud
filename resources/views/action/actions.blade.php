<a href="{{ route('action.show', ['donor' => $donor->id]) }}" class="btn btn-outline-dark btn-sm me-2">
    <i class="bi-person-lines-fill"></i>
</a>
<a href="{{ route('action.edit', ['donor' => $donor->id]) }}" class="btn btn-outline-dark btn-sm me-2">
    <i class="bi-pencil-square"></i>
</a>
<div>
    <form action="{{ route('action.destroy', ['donor' => $donor->id]) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete" data-name="{{ $donor->firstname.' '.$donor->lastname }}">
            <i class="bi-trash"></i>
        </button>
    </form>
</div>
