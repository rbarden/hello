@if(!$submissions->isEmpty())
    <table class="table-auto max-w-5xl mx-auto">
        <thead>
            <tr>
                <th class="border px-4 py-2"> Name </th>
                <th class="border px-4 py-2"> Email </th>
                <th class="border px-4 py-2"> Message </th>
                <th class="border px-4 py-2"> Actions </th>
            </tr>
        </thead>
        <tbody>
            @foreach($submissions as $submission)
                <tr>
                    <td class="border px-4 py-2"> {{ $submission->name }} </td>
                    <td class="border px-4 py-2"> <a href="mailto:{{ $submission->email }}"> {{ $submission->email }} </a> </td>
                    <td class="border px-4 py-2"> {{ $submission->message }} </td>
                    <td class="border px-4 py-2">
                        <form action="{{ route('hello.destroy', ['submission' => $submission]) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="text-red-500"> Delete </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

