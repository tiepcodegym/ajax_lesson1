$(document).ready(function(){
    let baseUrl = origin;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: baseUrl +'/api/books',
        type: 'GET',
        dataType: 'json',
        success: function (res){
            displayAllBook(res)
        }
    });

    function displayAllBook(books) {
    let str = "";
    for(let i = 0; i< books.length;i++){
        str+=`<tr id="book-${books[i].id}">
            <td>${books[i].id}</td>
            <td>${books[i].title}</td>
            <td>${books[i].code}</td>
            <td>${books[i].author}</td>
            <td><button data-id="${books[i].id}" class="delete-book">Delete</button></td>
        </tr>`;
    }
    $("tbody").html(str);
    }

    $("body").on("click",".delete-book",function () {
        let id = $(this).attr("data-id");
        $.ajax({
            url: baseUrl+"/api/books/delete/"+id,
            type: "GET",
            success:function (res) {
                $(`#book-${id}`).remove();
            }
        })
    })


})
