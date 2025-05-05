<x-app-layout>
    <div class="d-flex justify-content-start align-items-center flex-wrap">
        <div class="card" style="width: 33rem;">
            <div class="card-body">
                <h5 class="card-title">Dashboard</h5>
                <h6 class="card-subtitle mb-2 text-muted">Welcome {{ Auth::user()->name }}</h6>
                <p class="card-text">This is your dashboard where you can manage your account.</p>
                <p class="card-text">You are logged in as {{ Auth::user()->email }}</p>
            </div>
        </div>
        <div class="card mx-3" style="width: 18rem; height: 9.6rem;"> </div>
        <div class="card mx-1" style="width: 18rem; height: 9.6rem;"> </div>
        <div class="card mx-1" style="width: 18rem; height: 9.6rem;"> </div>
    </div>
</x-app-layout>
