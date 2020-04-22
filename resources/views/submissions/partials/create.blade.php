<form action="{{ route('hello.store') }}" method="POST" class="w-full max-w-lg mx-auto">
    @csrf
    <div class="flex flex-wrap my-3">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block text-gray-700 mb-2">
                Name
                <input
                    class="block w-full bg-gray-200 text-primary py-3 px-4 mb-3 focus:outline-none focus:bg-secondary @error('name') border border-red-500 rounded @enderror"
                    type="text"
                    placeholder="Reid"
                    value="{{ old('name') }}"
                    name="name"
                    required>
            </label>
            @error('name') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block text-gray-700 mb-2">
                Email
                <input
                    class="block w-full bg-gray-200 text-primary rounded py-3 px-4 mb-3 focus:outline-none focus:bg-secondary @error('email') border border-red-500 rounded @enderror"
                    type="email"
                    placeholder="hello@rvahams.com"
                    value="{{ old('email') }}"
                    name="email"
                    required>
            </label>
            @error('email') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror
        </div>
    </div>
    <div class="flex flex-wrap my-3">
        <div class="w-full px-3">
            <label class="block text-gray-700 mb-2">
                Message
                <textarea
                    class="block w-full bg-gray-200 text-primary rounded p-3 focus:outline-none focus:bg-secondary @error('message') border border-red-500 rounded @enderror"
                    name="message"
                    required>{{ old('message') }}</textarea>
            </label>
            @error('message') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror
        </div>
    </div>
    <div class="flex my-3 justify-center">
        <button type="submit"> Send Message </button>
    </div>
</form>

