<x-guest-layout>
    <div class="">
        <section class="text-center mb-4">
            <p class="fs-3 font-bold pt-3" style="line-height: 0.2;">Log in to your account</p>
            <small class="" style="line-height: 0.2;">Enter your email and password below to log in</small>
        </section>

        <section>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input id="email" name="email" class="form-control form-control-sm" type="email"
                        name="email" :value="old('email')" required autofocus autocomplete="username"
                        placeholder="email@domain.com">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" name="password" class="form-control form-control-sm" type="password"
                        name="password" :value="old('password')" required autocomplete="password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mb-3 d-grid gap-2">
                    <button type="submit" class="btn btn-light btn-sm">LOGIN</button>
                </div>

                <div class="text-center text-xs ">
                    <small>Don't have an account? <a href="{{ route('register') }}"
                            class="text-decoration-none text-white">Register</a></small>
                </div>
            </form>

        </section>
    </div>
</x-guest-layout>
