const  action= 28;
const adventure = 12;
const animation = 16;
const comedy = 35;
const crime = 80;
const documentary = 99;
const drama = 18;
const family = 10751;
const fantasy = 14;
const history = 36;
const horror = 27;
const music = 10402;




function getapi(url) {
  fetch(url)
    .then(response => response.json())
    .then(data => {
      
      getPoster(data.results, 20)
    })
  function getPoster(movies, nbrToShow) {
    for (i = 0; i < nbrToShow; i++) {
      document.getElementById('category').innerHTML += `<a class="categ" href="./index.php?action=player&id=${movies[i].id}"><img id= "poster${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="${movies[i].title}"></a>`
    }
  }
}

function getapiSerie(url) {
  fetch(url)
    .then(response => response.json())
    .then(data => {
      
      getPoster(data.results, 20)
    })
  function getPoster(movies, nbrToShow) {
    for (i = 0; i < nbrToShow; i++) {
      document.getElementById('category').innerHTML += `<a class="categ" href="./index.php?action=playerSeries&id=${movies[i].id}"><img id= "poster${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="${movies[i].title}"></a>`
    }
  }
}