require('./bootstrap');

window.$ = require('jquery');

$(document).ready(init);

function init(){
    
    getPosts();
    
}

function getPosts(){

    $.ajax({
        url: '/api/all',
        method: 'GET',
        success: function(posts){

            printPosts(posts);

        },
        error: function(err){

            console.log('err', err);

        }
    });

}

function printPosts(posts){

    target = $('#post-container');

    target.html('');

    for (var i = 0; i < posts.length; i++) {

        var post = posts[i];

        var postHtml = `<div class="card-header">${post['title']}</div><div class="card-body"> ${post['body']} </div>`;

        target.append(postHtml);
        
    }
}