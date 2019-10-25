function getapi(url){
    fetch(url)
        .then(response => response.json())
        .then(data=> {
          console.log(data)
          getPoster(data.results, 20)
        })
        function getPoster(movies, nbrToShow){
          for(i=0; i<nbrToShow; i++){
            document.getElementById('category').innerHTML+=`<a href="./index.php?action=player&id=${movies[i].id}"><img id= "poster${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt=""></a>`
          }
        }
        }