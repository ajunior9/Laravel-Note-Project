<x-app-layout>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <div class="note-container single-note">
        <h1 text-3xl py-4>Edit your Note</h1>
        <form action="{{route('note.update', $note) }}" method="POST" class="note">
            @csrf
            @method('PUT')
            <textarea name="note" id="" rows="10" class="note-body" 
                placeholder="Enter your note here">
              {{ $note->note}}
           </textarea>
            <div class="note-buttons">
                <a href="{{route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>


            </div>

        </form>
    </div>
</x-app-layout>

_