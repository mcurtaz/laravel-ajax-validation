require('./bootstrap');

window.$ = require('jquery');

$(document).ready(init);

function init(){
    
    getPosts();

    topCheckboxListener();
    
}

function getPosts(){

    var url = '/api/all';

    var isTopTenChecked = $('#top-checkbox').is(':checked');

    if(isTopTenChecked) {
        
        url = '/api/topten'
    }

    $.ajax({
        url: url,
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

function topCheckboxListener(){
    
    $('#top-checkbox').change(function(){
        
        getPosts();

    });
    
}