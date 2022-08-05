let apiURL = 'http://kacha/wp-json';
let parent_div = document.getElementById('lazy_search')
let index = 1;

function newPost(element){

    let div = document.createElement('div')
    let title = document.createElement('h3');
    let text = document.createElement('p');

    text.innerText = element.content.rendered;
    title.innerText = element.title.rendered;
    div.className = 'post_stile';

    div.appendChild(title);
    div.appendChild(text);

    parent_div.appendChild(div);

    let numberOfEntries = window.history.length;
    console.log(numberOfEntries);

    if(element.title.rendered == 'Title 1'){
        button.style.display = 'none';
    }

}

let button = document.getElementById('lazy_btn');
console.log(button);
fetch(  apiURL + '/wp/v2/posts?per_page=3&page='+index )
    .then( response => {
        if ( response.status !== 200 ) {
            throw new Error( 'Problem! Status Code: ' + response.status );
        }
        response.json().then( response  => {
            index++;
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

button.onclick = function(event) {
    fetch(  apiURL + '/wp/v2/posts?per_page=3&page='+index )
        .then( response => {
            if ( response.status !== 200 ) {
                throw new Error( 'Problem! Status Code: ' + response.status );
            }
            response.json().then( response  => {
                index++
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



