@extends('layouts.main')

@section('title', 'Giriş')

@section('content')
    <main>
        <section id="login">
            <div class="container">
                <div class="login">
                    <h3>GİRİŞ EDİN</h3>
                    <form id="loginForm">
                        @csrf
                        <span>E-Poçt hesabınız</span>
                        <input type="email" name="email" placeholder="E-Poçt" required>
                        <span class="text-danger" id="emailError"></span>

                        <span>Şifrə</span>
                        <input type="password" name="password" placeholder="Şifrəniz" required>
                        <span class="text-danger" id="passwordError"></span>

                        <div class="link">
                            <a href="#">Şifrəmi Unutdum</a>
                            <a href="register">Qeydiyyat</a>
                        </div>
                        <button type="submit">Giriş</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            document.getElementById('emailError').innerText = '';
            document.getElementById('passwordError').innerText = '';

            let formData = new FormData(this);

            fetch('{{ route('login.submit') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(errorData => {
                            throw new Error(JSON.stringify(errorData.message));
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
                            window.location.href = '/profile';
                        });
                    }
                })
                .catch(error => {
                    console.error('Xəta:', error);
                    const errorMessages = JSON.parse(error.message);
                    document.getElementById('emailError').innerText = errorMessages.email ? errorMessages.email : '';
                    document.getElementById('passwordError').innerText = errorMessages.password ? errorMessages.password : '';

                    const errorAudio = new Audio('/sounds/error.mp3');
                    errorAudio.play();

                    Swal.fire({
                        icon: 'error',
                        title: 'Xəta!',
                        text: errorMessages || 'Giriş olunarkən xəta baş verdi.',
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
