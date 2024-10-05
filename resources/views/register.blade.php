@extends('layouts.main')

@section('title', 'Qeydiyyat')

@section('content')
    <main>
        <section id="register">
            <div class="container">
                <div class="register">
                    <h3>QEYDİYYAT</h3>
                    <form id="registerForm">
                        @csrf
                        <input type="text" name="nickname" placeholder="Nickname" required maxlength="30"
                            value="{{ old('nickname') }}">
                        <span class="text-danger" id="nicknameError"></span>

                        <input type="text" name="name" placeholder="Ad" required maxlength="50"
                            value="{{ old('name') }}">
                        <span class="text-danger" id="nameError"></span>

                        <input type="text" name="surname" placeholder="SoyAd" required maxlength="50"
                            value="{{ old('surname') }}">
                        <span class="text-danger" id="surnameError"></span>

                        <input type="email" name="email" placeholder="E-Poçt hesabınız" required maxlength="100"
                            value="{{ old('email') }}">
                        <span class="text-danger" id="emailError"></span>

                        <input type="password" name="password" placeholder="Şifrəniz" required minlength="6"
                            maxlength="30">
                        <span class="text-danger" id="passwordError"></span>

                        <input type="password" name="password_confirmation" placeholder="Şifrənizi təsdiqləyin" required
                            minlength="6" maxlength="30">
                        <span class="text-danger" id="passwordConfirmationError"></span>

                        <div class="link">
                            <div class="check">
                                <input type="checkbox" id="agreement" name="agreement" required>
                                <label for="agreement">
                                    <a href="muqavile">Müqavilə</a> oxudum və qəbul edirəm
                                </label>
                            </div>
                            <a href="login">Giriş</a>
                        </div>
                        <button type="submit">Qeydiyyat</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();

            document.getElementById('nicknameError').innerText = '';
            document.getElementById('nameError').innerText = '';
            document.getElementById('surnameError').innerText = '';
            document.getElementById('emailError').innerText = '';
            document.getElementById('passwordError').innerText = '';
            document.getElementById('passwordConfirmationError').innerText = '';

            let formData = new FormData(this);

            fetch('{{ route('register') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(errorData => {
                            throw new Error(JSON.stringify(errorData.messages));
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.status === 'success') {
                        const successAudio = new Audio('/sounds/success.mp3');
                        successAudio.play();

                        Swal.fire({
                            icon: 'success',
                            title: data.message,
                            toast: true,
                            position: 'top-end',
                            timer: 3000,
                            showConfirmButton: false,
                            timerProgressBar: true,
                        }).then(() => {
                            window.location.href = '{{ route('login') }}';
                        });
                    }
                })
                .catch(error => {
                    console.error('Hata:', error);

                    const errorMessages = JSON.parse(error.message);

                    const customErrorMessages = {
                        'The nickname has already been taken.': 'Bu nickname alınıb.',
                        'The email has already been taken.': 'Bu E-Poçt qeydiyyatlıdır.',
                        'The password field confirmation does not match.': 'Şifrələr uyğun gəlmir.',
                    };

                    document.getElementById('nicknameError').innerText = errorMessages.nickname ?
                        customErrorMessages[errorMessages.nickname[0]] || errorMessages.nickname[0] : '';
                    document.getElementById('emailError').innerText = errorMessages.email ? customErrorMessages[
                        errorMessages.email[0]] || errorMessages.email[0] : '';
                    document.getElementById('nameError').innerText = errorMessages.name ? errorMessages.name[
                        0] : '';
                    document.getElementById('surnameError').innerText = errorMessages.surname ? errorMessages
                        .surname[0] : '';
                    document.getElementById('passwordError').innerText = errorMessages.password ? errorMessages
                        .password[0] : '';
                    document.getElementById('passwordConfirmationError').innerText = errorMessages
                        .password_confirmation ? customErrorMessages[errorMessages.password_confirmation[0]] ||
                        errorMessages.password_confirmation[0] : '';

                    const errorAudio = new Audio('/sounds/error.mp3');
                    errorAudio.play();

                    Swal.fire({
                        icon: 'error',
                        title: 'Xəta!',
                        text: 'Zəhmət olmasa xanaları yoxlayın.',
                        toast: true,
                        position: 'top-end',
                        timer: 3000,
                        showConfirmButton: false,
                        timerProgressBar: true,
                    });
                });
        });
    </script>

@endsection
