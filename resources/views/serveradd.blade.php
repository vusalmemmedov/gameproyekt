@extends('layouts.main')

@section('title', 'Server əlavə etmək')

@section('content')
    <main>
        <section id="serveradd">
            <div class="container">
                <div class="serveradd">
                    <h3>Server Əlavə Etmək</h3>
                    <form id="serverForm">
                        <div class="form-group">
                            <label for="serverName">Serverinizin Adı:</label>
                            <input type="text" id="serverName" name="serverName" placeholder="Serverinizin Adı" required>
                        </div>
                        <div class="form-group autocomplete">
                            <label for="serverCategory">Kategori Seçin:</label>
                            <input type="text" id="serverCategory" name="serverCategory" placeholder="Kategori axtarın..."
                                autocomplete="off" required>
                            <div id="categoryList" class="autocomplete-items"></div>
                        </div>
    
                        <div class="form-group">
                            <label for="serverInfo">Server Haqqında Məlumat:</label>
                            <div id="serverInfoEditor"></div>
                        </div>
    
                        <textarea id="serverInfo" name="serverInfo" style="display:none;" required></textarea>
    
                        <button type="submit" class="submit-button">Əlavə Et</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
