<div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="/events">Zdarzenia</a>
          <a class="p-2 text-muted" href="/projects">Projekty</a>
          <a class="p-2 text-muted" href="/projects/create">Nowy projekt</a>
          <a class="p-2 text-muted" href="#">Dokumentacja</a>
          <a class="p-2 text-muted" href="/logout">Wyloguj</a>
          @auth 
          <p>Zalogowany</p>
          @endauth
          
        </nav>
      </div>

