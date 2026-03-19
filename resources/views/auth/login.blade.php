<x-layouts.base>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="text-center m-5">
            <a href="/" class="text-2xl btn btn-ghost font-bold">Zarb</a>
        </div>
        <div class="card border border-primary/50 shadow-lg w-lg">
            <div class="card-body">
                <h2 class="card-title">Connection</h2>
                <form class="form flex flex-col p-5 gap-3" method="POST" action="{{ route('login') }}">
                    @csrf
                    <lable class="label" for="email">Courriel</lable>
                    <input type="email" name="email" class="input w-full" value="{{ old('email') }}" />
                    
                    <lable class="label" for="password">Mot de passe</lable>
                    <input type="password" name="password" class="input w-full" />
                    @error('email')
                       <span class="text-error">{{ $message }}</span>
                    @enderror
                    @error('password')
                       <span class="text-error">{{ $message }}</span>
                    @enderror

                    <button type="submit" class="btn btn-primary mt-4">Connection</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.base>

