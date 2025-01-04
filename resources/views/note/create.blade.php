<x-app-layout>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <div class="note-container single-note">
        <h1>Create your  New Note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="note">
              @csrf
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here">

</textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>


            </div>

        </form>
    </div>
</x-app-layout>