// $(document).ready(function() {
//     $('#example').dataTable();
// } );

// //Ckeditor
//   ClassicEditor()
// .create( document.querySelector( '#editor' ) )
// .catch( error => {
//     console.error( error );
// } );

// //MAin Image Change
var image = document.getElementById("mainImage");
var images = ["top-news-1.jpg","top-news-2.jpg","top-news-3.jpg","top-news-4.jpg","top-news-5.jpg"];
var index = 0;

function updateImage() {
    image.src = images[index];
    index = (index + 1) % images.length;
 }
setInterval(updateImage, 5000);


//Fetch API for sports
const sport_data = document.getElementsByClassName('sport_data');

fetch('http://127.0.0.1:8000/api/sportGet')
      .then(response => response.json())
      .then(json => {
       json.forEach((item)=>{
        sport_data[0].innerHTML += `
        <div class="col-sm-6"><img src="http://127.0.0.1:8000/uploads/newsImage/${item.image}" class="card-img-top" alt="..." style="width:90%;height:90%"></div>
        <div class="col-sm-6">
            <div class="card-body">
                <h5 class="card-title">${item.title}</h5>
                <p class="card-text">${item.description}</p>
                <p class="card-text"><small class="text-muted"> Author: ${item.lname} </small></p>
            </div>
        </div>`
       });
      });


//Fetch API for Business
   const business_data = document.getElementsByClassName('business_data');

    fetch('http://127.0.0.1:8000/api/businessGet')
        .then(response => response.json())
        .then(json => {
            json.forEach((record) => {
                business_data[0].innerHTML += `
                    <div class="col-sm-6">
                        <img src="http://127.0.0.1:8000/uploads/newsImage/${record.image}" class="card-img-top" alt="..." style="width:90%;height:90%">
                    </div>
                    <div class="col-sm-6">
                        <div class="card-body">
                            <h5 class="card-title">${record.title}</h5>
                            <p class="card-text">${record.description}</p>
                            <p class="card-text"><small class="text-muted">Author: ${record.lname}</small></p>
                        </div>
                    </div>`;
            })
        });


//Fetch API for technology
const technology_data = document.getElementsByClassName('technology_data');

fetch('http://127.0.0.1:8000/api/technologyGet')
.then(response => response.json())
.then(json => {
    json.forEach((element) => {
        technology_data[0].innerHTML += `
        <div class="col-sm-6">
        <img src="http://127.0.0.1:8000/uploads/newsImage/${element.image}" class="card-img-top" alt="..." style="width:90%;height:90%">
    </div>
    <div class="col-sm-6">
        <div class="card-body">
            <h5 class="card-title">${element.title}</h5>
            <p class="card-text">${element.description}</p>
            <p class="card-text"><small class="text-muted">Author: ${element.lname}</small></p>
        </div>
    </div>`;
    });
});



//Fetch API for entertainment
const entertainment_data = document.getElementsByClassName('entertainment_data');

fetch('http://127.0.0.1:8000/api/entertainmentGet')
.then(response => response.json())
.then(json => {
    json.forEach((data) => {
        entertainment_data[0].innerHTML += `
        <div class="col-sm-6">
        <img src="http://127.0.0.1:8000/uploads/newsImage/${data.image}" class="card-img-top" alt="..." style="width:90%;height:90%">
    </div>
    <div class="col-sm-6">
        <div class="card-body">
            <h5 class="card-title">${data.title}</h5>
            <p class="card-text">${data.description}</p>
            <p class="card-text"><small class="text-muted">Author: ${data.lname}</small></p>
        </div>
    </div>`;
    });
});


//Fetch data for Latest News Section HOME Page
const latest_data = document.getElementsByClassName('latest_data');
const latest_data_top = document.getElementsByClassName('latest_data_top');
let counter = 0;

fetch('http://127.0.0.1:8000/api/latestNews')
  .then(response => response.json())
  .then(json => {

      json.forEach(article => {
        if(counter < 1) {
        latest_data_top[0].innerHTML+=`<div class="mn-img">
        <img src="http://127.0.0.1:8000/uploads/newsImage/${article.image}" alt="Logo">
    </div>
    <div class="mn-content">
        <a class="mn-title" href="">${article.title}</a>
        <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
        <p>
           ${article.description}
        </p>
    </div>`
        }
        if (counter < 5) {
          latest_data[0].innerHTML += `
            <div class="mn-list">
                <div class="mn-img">
                    <img src="http://127.0.0.1:8000/uploads/newsImage/${article.image}" alt="Logo" />
                </div>
                <div class="mn-content">
                    <a class="mn-title" href="">${article.title}</a>
                </div>
            </div>
          `;
          counter++;
        } else {
          return;
        }
      });
  })
  .catch(error => {
    console.error('Error fetching news data:', error);
  });


  //Fetch data for popular News
  const popular_data = document.getElementsByClassName('popular_data');
  const popular_data_top = document.getElementsByClassName('popular_data_top');
  let count = 0;

  fetch('http://127.0.0.1:8000/api/popularNews')
    .then(response => response.json())
    .then(json => {
// Check if data.articles exists
        json.forEach(item => {
          if (count < 1) {
            popular_data_top[0].innerHTML += `
                <div class="mn-img">
                  <img src="http://127.0.0.1:8000/uploads/newsImage/${item.image}" alt="Logo" />
                </div>
                <div class="mn-content">
                  <a class="mn-title" href="">${item.title}</a>
                  <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                </div>
                <p>   ${item.description} </p>
            `;
          }
          if (count < 5) {
            popular_data[0].innerHTML += `
              <div class="mn-list">
                <div class="mn-img">
                  <img src="http://127.0.0.1:8000/uploads/newsImage/${item.image}" alt="Logo" />
                </div>
                <div class="mn-content">
                  <a class="mn-title" href="">${item.title}</a>
                  <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                </div>
              </div>
            `;
            count++;
          } else {
            return;
          }
        });
    })
    .catch(error => {
      console.error('Error fetching news data:', error);
    });

//GetApi
const getApi = document.getElementsByClassName('getApi')

fetch('http://127.0.0.1:8001/api/assignAssignment')
.then(response => response.json())
.then(json => {
    json.forEach((data) => {
        fetch(`http://127.0.0.1:8001/api/employee/${data.employee_id}`)
        .then(response => response.json())
        .then(employeeData => {
            getApi[0].innerHTML += `
           ${employeeData.emp_name}
            ${data.assesment}
            `;
    });
    });
});
