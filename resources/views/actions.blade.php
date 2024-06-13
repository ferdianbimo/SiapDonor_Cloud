<div class="d-flex">
    <a href="{{ route('actions.show', ['donor' => $donor->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-person-lines-fill"></i></a>
    <a href="{{ route('actions.edit', ['donor' => $donor->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-pencil-square"></i></a>
    <div>
        <form action="{{ route('actions.destroy', ['donor' => $donor->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete" data-name="{{ $donor->firstname.' '.$donor->lastname }}">
                <i class="bi-trash"></i>
            </button>
        </form>
    </div>
</div>
