@extends('components.layout')
@section('container')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Luckiest+Guy&family=Rubik:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Card Menu</title>
  </head>
  <body>
    <main class="container">
      <h1>Starbucks Menu</h1>
      <h2>Popular Dishes</h2>
      <ul>
        <li><a href="#">Promo</a></li>
        <li><a href="#" >Ala Carte</a></li>
        <li><a href="meals">Group Meals</a></li>
        <li><a href="dessert">Side and Dessert</a></li>
        <li><a href="drink" class="active">Drinks</a></li>
      </ul>
      <section class="menu">
        <div class="item">
          <div class="badge">Potongan 100k</div>
          <nav>
            <a href="#">
              <span class="material-icons">
                shopping_basket
              </span>
            </a>
            <a href="#">
              <span class="material-icons">
                favorite
              </span>
            </a>
            <a href="#" class="active">
              <span class="material-icons">
                visibility
              </span>
            </a>
          </nav>
          <div class="foto">
            <img src="img/karamelmaciato.png" alt="menu 2" />
          </div>
          <div class="keterangan">
            <div class="singkat">karamelmaciato (Any Flavors)</div>
            <div class="bintang">
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons">star_border</span>
              <span class="material-icons">star_border</span>
            </div>
          </div>
          <div class="nama">
            karamel maciato
          </div>
          <div class="harga">
            Harga <span class="merah">Rp.50.0000</span> /
            <span class="coret">Rp.150.0000</span>
          </div>
        </div>
        <div class="item">
          <nav>
            <a href="#">
              <span class="material-icons">
                shopping_basket
              </span>
            </a>
            <a href="#">
              <span class="material-icons">
                favorite
              </span>
            </a>
            <a href="#" class="active">
              <span class="material-icons">
                visibility
              </span>
            </a>
          </nav>
          <div class="foto">
            <img src="img/vanillasweet.png" alt="menu 2" />
          </div>
          <div class="keterangan">
            <div class="singkat">Vanilla Sweet Cream Cold Brew (Any Flavors)</div>
            <div class="bintang">
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons">star_border</span>
              <span class="material-icons">star_border</span>
            </div>
          </div>
          <div class="nama">
            Vanilla Sweet Cream Cold Brew
          </div>
          <div class="harga">
            Harga <span class="merah">Rp.50.0000</span> /
            <span class="coret">Rp.150.0000</span>
          </div>
        </div>
        <div class="item">
          <nav>
            <a href="#">
              <span class="material-icons">
                shopping_basket
              </span>
            </a>
            <a href="#">
              <span class="material-icons">
                favorite
              </span>
            </a>
            <a href="#" class="active">
              <span class="material-icons">
                visibility
              </span>
            </a>
          </nav>
          <div class="foto">
            <img src="img/javachipfrappuccino.png" alt="menu 5" />
          </div>
          <div class="keterangan">
            <div class="singkat">Java Chip Frappuccino
              (Any Flavors)</div>
            <div class="bintang">
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons">star_border</span>
              <span class="material-icons">star_border</span>
            </div>
          </div>
          <div class="nama">
            Java Chip Frappuccino

          </div>
          <div class="harga">
            Harga <span class="merah">Rp.50.0000</span> /
            <span class="coret">Rp.150.0000</span>
          </div>
        </div>
        <div class="item">
          <div class="badge">new</div>
          <nav>
            <a href="#">
              <span class="material-icons">
                shopping_basket
              </span>
            </a>
            <a href="#">
              <span class="material-icons">
                favorite
              </span>
            </a>
            <a href="#" class="active">
              <span class="material-icons">
                visibility
              </span>
            </a>
          </nav>
          <div class="foto">
            <img src="img/asiandolcelatte.png" alt="menu 5" />
          </div>
          <div class="keterangan">
            <div class="singkat">Asian Dolce Latte (Any Flavors)</div>
            <div class="bintang">
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons">star_border</span>
              <span class="material-icons">star_border</span>
            </div>
          </div>
          <div class="nama">
            Asian Dolce Latte
          </div>
          <div class="harga">
            Harga <span class="merah">Rp.50.0000</span> /
            <span class="coret">Rp.150.0000</span>
          </div>
        </div>
        <div class="item">
          <div class="badge">-10%</div>
          <nav>
            <a href="#">
              <span class="material-icons">
                shopping_basket
              </span>
            </a>
            <a href="#">
              <span class="material-icons">
                favorite
              </span>
            </a>
            <a href="#" class="active">
              <span class="material-icons">
                visibility
              </span>
            </a>
          </nav>
          <div class="foto">
            <img src="img/vanillacreamfrappuccino.png" alt="menu 5" />
          </div>
          <div class="keterangan">
            <div class="singkat">Vanilla Cream Frappuccino (Any Flavors)</div>
            <div class="bintang">
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons">star_border</span>
              <span class="material-icons">star_border</span>
            </div>
          </div>
          <div class="nama">
            Vanilla Cream Frappuccino
          </div>
          <div class="harga">
            Harga <span class="merah">Rp.50.0000</span> /
            <span class="coret">Rp.150.0000</span>
          </div>
        </div>
        <div class="item">
          <div class="badge">new</div>
          <nav>
            <a href="#">
              <span class="material-icons">
                shopping_basket
              </span>
            </a>
            <a href="#" >
              <span class="material-icons">
                favorite
              </span>
            </a>
            <a href="#" class="active">
              <span class="material-icons">
                visibility
              </span>
            </a>
          </nav>
          <div class="foto">
            <img src="img/greentealatte.png" alt="menu 5" />
          </div>
          <div class="keterangan">
            <div class="singkat">Green Tea Latte (Any Flavors)</div>
            <div class="bintang">
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons">star_border</span>
              <span class="material-icons">star_border</span>
            </div>
          </div>
          <div class="nama">
            Green Tea Latte
          </div>
          <div class="harga">
            Harga <span class="merah">Rp.50.0000</span> /
            <span class="coret">Rp.150.0000</span>
          </div>
        </div>
      </section>
      <nav class="button-see">
        <a href="#">See all menu</a>
      </nav>
    </main>
  </body>
</html>

@endsection