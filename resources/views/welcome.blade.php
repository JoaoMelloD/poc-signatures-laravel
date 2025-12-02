<x-layouts.base>
    <section class="flex flex-col px-8 py-6">

        <div class="flex justify-between px-12">
            <h1 class="text-zinc-50 text-2xl">Projeto Do Curso</h1>
            <nav>
                <ul class="flex gap-4 text-zinc-50">
                    <a class=" border hover:bg-zinc-950 transition-colors ease-out border-zinc-50 rounded-xl cursor-pointer px-6 py-2"
                        href="{{ route('login') }}">
                        <li>Login</li>
                    </a>
                    <a class=" border hover:bg-zinc-950 transition-colors ease-out border-zinc-50 rounded-xl cursor-pointer px-6 py-2"
                        href="{{ route('register') }}">
                        <li>Register</li>
                    </a>
                </ul>
            </nav>
        </div>

        <div class="flex flex-col w-full text-center p-8">
            @if (auth()->user())
                <h2 class="text-2xl text-zinc-200">Seja Bem-Vindo(a) <span class="bg-zinc-50 text-zinc-900  rounded-sm px-2 py-1"> {{ auth()->user()->name }}</span></h2>
            @endif
        </div>
    </section>
</x-layouts.base>
