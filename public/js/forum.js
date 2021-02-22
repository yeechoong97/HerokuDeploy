window.addEventListener("load", function() {
    let tagList = document.getElementsByClassName('nav-link-faded');
    let selectedTag = document.getElementById('tag-id').value;
    for (let item of tagList) {
        if (selectedTag == item.innerText)
            item.classList.add('active');
        else
            item.classList.remove('active');
    }
});

function calculateDayDifference(date1, date2) {
    const ONE_DAY = 1000 * 60 * 60 * 24;
    const differenceMs = Math.abs(date1 - date2);
    return Math.round(differenceMs / ONE_DAY);
}

function searchForum() {
    let searchContent = document.getElementById('search-forum-text').value;
    let tagValue = document.getElementById('tag-id').value;
    let pageNumber = document.getElementById('hidden_page_number').value;
    let forumFilter = document.getElementById('select-filter').value;
    var token = $('meta[name="csrf-token"]').attr('content');
    let forumObject = { search: searchContent, tag: tagValue, filter: forumFilter };
    $.ajax({
        type: 'PATCH',
        url: '/forum/fetch',
        data: {
            _token: token,
            data: forumObject,
            page: pageNumber
        },
        success: function(data) {
            $('#main-contents-forum').html('');
            $('#main-contents-forum').html(data);
        },
        error: function(data) {
            console.log(JSON.stringify(data));
        }
    });
}

function resetFilter() {
    document.getElementById('select-filter').value = "title";
}

// Prevent the page from refreshing when paginate
$(document).on('click', '.pagination a', function(event) {
    event.preventDefault();
    page = $(this).attr('href').split('page=')[1];
    $('#hidden_page_number').val(page);
    $('li').removeClass('active');
    $(this).parent().addClass('active');
    searchForum();
});

function appendAlertDeleteComment(id, tagValue) {
    Swal.fire({
        title: 'Confirmation',
        html: `<p>Are you sure you want to delete this comment?<p><p>Once deleted this comment, the comment is no longer able to be recovered.</p>`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Confirm',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancel',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed)
            deleteComment(id, tagValue);
    });
}

function appendAlertDeletePost(id, tagValue) {
    Swal.fire({
        title: 'Confirmation',
        html: `<p>Are you sure you want to delete this forum post?<p><p>Deleting this forum post will also remove all the comments from this post. Once deleted this post, the comments and post are no longer able to be recovered.</p>`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Confirm',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancel',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed)
            deletePost(id, tagValue);
    });
}