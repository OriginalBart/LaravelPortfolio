@extends('layout')
@section('css')

<link href="{{ asset('css/homepage.css') }}" rel="stylesheet">

@endsection


@section('content')

<p class="projectcenter">𝙼𝚒𝚓𝚗 𝙿𝚛𝚘𝚓𝚎𝚌𝚝𝚎𝚗</p>
<div class="main">
  <ul class="cards">
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <img
            class="opdrachtenborder"
            src="{{asset('images/school.jpg')}}"
            alt="school"
          />
        </div>
        <div class="card_content">
          <h2 class="card_title">School</h2>
          <p class="card_text">Mijn stuk over school.</p>
          <button class="btn card_btn">
            <a href="school.html">Lees meer</a>
          </button>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <img class="opdrachtenborder" src="{{asset('images/werk.jpg')}}" alt="werk" />
        </div>
        <div class="card_content">
          <h2 class="card_title">Werk</h2>
          <p class="card_text">
            Mijn stuk over werk.
          </p>
          <button class="btn card_btn">
            <a href="werk.html">Lees meer</a>
          </button>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <img
            class="opdrachtenborder"
            src="{{asset('images/gamen.jpg')}}"
            alt="gamen"
          />
        </div>
        <div class="card_content">
          <h2 class="card_title">Gamen</h2>
          <p class="card_text">
            Mijn stuk over gamen.
          </p>
          <button class="btn card_btn">
            <a href="gamen.html">Lees meer</a>
          </button>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <img
            class="opdrachtenborder"
            src="{{asset('images/vissen.jpg')}}"
            alt="vissen"
          />
        </div>
        <div class="card_content">
          <h2 class="card_title">Vissen</h2>
          <p class="card_text">
            Mijn stuk over vissen.
          </p>
          <button class="btn card_btn">
            <a href="vissen.html">Lees meer</a>
          </button>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <img
            class="opdrachtenborder"
            src="{{asset('images/voetbal.jpg')}}"
            alt="voetbal"
          />
        </div>
        <div class="card_content">
          <h2 class="card_title">Voetbal</h2>
          <p class="card_text">
            Mijn stuk over voetbal.
          </p>
          <button class="btn card_btn">
            <a href="voetbal.html">Lees meer</a>
          </button>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <img
            class="opdrachtenborder"
            src="{{asset('images/opdrachten.jpg')}}"
            alt="opdrachten"
          />
        </div>
        <div class="card_content">
          <h2 class="card_title">Opdrachten</h2>
          <p class="card_text">
            Mijn stuk over opdrachten.
          </p>
          <button class="btn card_btn"><a href="opdrachten.html">Lees meer</a></button>
        </div>
      </div>
    </li>
  </ul>
</div>
</section>
<section id="overmij">
<div class="overmij"><p>𝙾𝚟𝚎𝚛 𝚖𝚒𝚓</p></div>
<div class="fotowidth">
<img class="fotobart" src="{{asset('images/bart.jpg')}}" alt="bart" />
</div>
<div class="overmijtekst">
  <p><h3>Wie ben ik?</h3><br>Mijn naam is Bart van Schoonhoven en ik ben achttien jaar oud, 
    <br>op het moment zit ik op de school Grafisch Lyceum Utrecht in de klas 2md1.<br> Ik 
    doe de opleiding webdeveloper en voor een schoolopdracht moeten we een <br>portfolio 
    maken voor het vak web. Ook moet ik voor het vak programmeren Laravel <br>toevoegen 
    aan mijn website. Verder ga ik op deze website nog vertellen waar ik in het <br>dagelijkse 
    leven mee bezig ben  of mee bezig ben geweest zoals; school, gamen, vissen,<br> werken en 
    voetbal. Ook zal ik alle opdrachten waar ik trots op ben op de website zetten <br>aangezien 
    dat ook moet voor de schoolopdracht. Ik hoop dat dit een beetje weergeeft wie ik ben.</p>
</div>
</section>

@endsection