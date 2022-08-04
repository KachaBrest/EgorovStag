let apiURL = 'http://kacha/wp-json';
let parent_div = document.getElementById('lazy_search')
let index = 3;


function newPost(element){

    let div = document.createElement('div')
    let title = document.createElement('h3');
    let text = document.createElement('p');

    text.innerText = element.content.rendered;
    title.innerText = element.title.rendered;

    div.appendChild(title);
    div.appendChild(text);

    parent_div.appendChild(div);

}

fetch(  apiURL + '/wp/v2/posts?page=1' )
    .then( response => {
        if ( response.status !== 200 ) {
            throw new Error( 'Problem! Status Code: ' + response.status );
        }
        response.json().then( response  => {
            posts = response
            console.log( posts ); // выведем в консоль
            posts.forEach( el => {
                newPost(el)
            })

        });
    })
    .catch(function(err) {
        console.log( 'Error: ', err );
    });




let button = document.getElementById('lazy_btn')
button.onclick = function(event) {
    fetch(  apiURL + '/wp/v2/posts?page=2' )
        .then( response => {
            if ( response.status !== 200 ) {
                throw new Error( 'Problem! Status Code: ' + response.status );
            }
            response.json().then( response  => {
                posts = response
                posts.forEach( el => {
                    newPost(el)
                })
                console.log( posts ); // выведем в консоль
            });
        })
        .catch(function(err) {
            console.log( 'Error: ', err );
        });
};



