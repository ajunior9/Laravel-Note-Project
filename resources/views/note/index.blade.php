<x-app-layout>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <div class="note-container py-12">
       <a href="{{route('note.create')}}" class="new-note-btn">
New Note
</a>
        <div class="notes">
            @foreach ($notes as $note)
              <div class="note">

                <div class="note-body">
                          {{ Str::words($note->note, 20) }}
                </div>
                <div class="note-buttons">
                    <a href="{{route('note.show', $note)}}" class="note-edit-button">view</a>
                    <a href="{{route('note.edit', $note)}}" class="note-edit-button">Edit</a>
                    <form action="{{route('note.destroy', $note)}}" method="POST">
                       @csrf
                    @method('DELETE')
            <button type="submit" class="note-delete-button">Delete</button>
      </form>

                </div>



            </div>

            @endforeach
            


        </div>

{{$notes->links()}}

    </div>
</x-app-layout>