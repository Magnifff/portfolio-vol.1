// User
document.getElementById("userIDbutton").onclick = function(){

    let username1 = document.querySelector("b");
    let userResult1;
    let url = 'https://jsonplaceholder.typicode.com/users/' + document.getElementById("userID").value;
    fetch(url)
        .then(res => res.json())
        .then(data => userResult1 = data)
        .then(() => username1.innerHTML = userResult1.name)
}


// Post
document.getElementById("postIDbutton").onclick = function() {

    let post1 = document.getElementById("postPlek");
    let postResult1;
    let urlPost1 = 'https://jsonplaceholder.typicode.com/posts/' + document.getElementById("postID").value;
    fetch(urlPost1)
        .then(res => res.json())
        .then(data => postResult1 = data)
        .then(() => post1.innerHTML = postResult1.body)
}

//comment
document.getElementById("commentIDbutton").onclick = function() {

let comment1  = document.getElementById("commentPlek");
let commentResult1;
let urlComment1 = 'https://jsonplaceholder.typicode.com/comments/' + document.getElementById("commentID").value;

fetch(urlComment1)
    .then(res => res.json())
    .then(data => commentResult1 = data)
    .then(() => comment1.innerHTML = commentResult1.body)
}

