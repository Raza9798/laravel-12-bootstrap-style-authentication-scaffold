<x-guest-layout>
    <section class="text-center mb-4">
        <p class="fs-3 font-bold pt-3" style="line-height: 0.2;">Create an account</p>
        <small class="" style="line-height: 0.2;">Enter your details below to create your account</small>
    </section>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="form-label">name </label>
            <input id="name" name="name" class="form-control form-control-sm" type="name" name="name"
                :value="old('name')" required autofocus autocomplete="username" placeholder="Full name">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email" class="form-label">Email address</label>
            <input id="email" name="email" class="form-control form-control-sm" type="email" name="email"
                :value="old('email')" required autofocus autocomplete="username" placeholder="email@example.com">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="form-label">Password</label>
            <input id="password" name="password" class="form-control form-control-sm" type="password" name="password"
                :value="old('password')" required autocomplete="password" placeholder="Password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" class="form-label">password confirmation</label>
            <input id="password_confirmation" name="password_confirmation" class="form-control form-control-sm"
                type="password_confirmation" name="password_confirmation" :value="old('password_confirmation')" required
                autocomplete="password" placeholder="Confirm Password">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <div class="mb-3 d-grid gap-2">
                <button type="submit" class=" btn btn-light ">REGISTER</button>
            </div>
        </div>
        <div class="flex items-center justify-center text-center">
            <small> Already have an account?</small>
            <a class="underline-none text-sm text-white" href="{{ route('login') }}">
                <small>login</small>
            </a>
        </div>
    </form>
</x-guest-layout>
