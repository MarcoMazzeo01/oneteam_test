@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registra Appartamento') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('apartments.store') }}">
                            @csrf

                            <div class="mb-4 row">
                                <label for="username"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ old('address') }}" required autocomplete="address" autofocus>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Proprietario') }}</label>

                                @php
                                    $adminUsers = App\Models\User::where('rank', 'landlord')->get();
                                @endphp


                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="landlord_id" id="floatingSelect"
                                            aria-label="Floating label select example">
                                            <option selected>Seleziona proprietario</option>
                                            @foreach ($adminUsers as $user)
                                                <option value="{{ $user->id }}">{{ $user->username }}</option>
                                            @endforeach
                                        </select>
                                        <label for="floatingSelect">Seleziona proprietario immobile</label>
                                    </div>

                                </div>


                            </div>
                    </div>


                    <div class="mb-4 row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Registra appartamento') }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
