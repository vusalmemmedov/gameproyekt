@extends('layouts.main')

@section('title', 'Əlaqə')

@section('content')
    <main>
        <section id="contact">
            <div class="container">
                <div class="title">
                    <h3>ƏLAQƏ</h3>
                </div>
                <div class="contactform">
                    <div class="name">
                        <input type="text" maxlength="15" placeholder="Adınız" required>
                        <p></p>
                        <input type="text" maxlength="20" placeholder="Soy Adınız" required>
                    </div>

                    <div class="reason">
                        <select required>
                            <option disabled selected>Səbəbi seçin</option>
                            <option value="teklif">Təklif</option>
                            <option value="sikayet">Şikayət</option>
                            <option value="problem">Problem</option>
                            <option value="diger">Digər</option>
                        </select>
                    </div>

                    <div class="message">
                        <textarea placeholder="Mesajınız" rows="4" cols="50" required></textarea>
                    </div>

                    <div class="submit">
                        <button type="submit">Göndər</button>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
