$("#select-sorting").on('change', function() {
    let url_string = window.location.href;
    let url = new URL(url_string);
    window.location.href = url.pathname + '?sortBy=' + this.selectedOptions[0].value;
});

$('#detPdfBtn').on('click', function () {

})

let words = document.getElementsByClassName('words');

for (let wordElement of words) {
    wordElement.addEventListener('focus', (event) => {
      event.target.style.background = 'pink';
    });

    wordElement.addEventListener('blur', (event) => {
        event.target.style.background = '';
        if (wordElement.classList.contains('original')) {
            $.ajax('/dictionary/update/orig/' + wordElement.labels[0].innerText, {
                type: 'PUT',
                dataType: 'text',
                data: {'orig': wordElement.value},
                error: function () {
                    alert('Some error and word not saved :(')
                },
                success: function (data) {
                    if (data === 'refresh') {
                        document.location.reload();
                    }
                }
            });
        }else {
            $.ajax('/dictionary/update/trans/' + wordElement.labels[0].innerText, {
                type: 'PUT',
                dataType: 'text',
                data: {'trans': wordElement.value},
                error: function () {
                    alert('Some error and word not saved :(')
                }
            })
        }
    })
}

let pairs = document.getElementsByClassName('pair-of-words');
for (let pairElement of pairs) {
    pairElement.addEventListener('mouseenter', () => {
        let btn = document.getElementById('delete-btn-' + pairElement.id)
        btn.hidden = false;
    });
    pairElement.addEventListener('mouseleave', () => {
        let btn = document.getElementById('delete-btn-' + pairElement.id)
        btn.hidden = true;
    });
}

function deletePair(pairId) {
    if (window.confirm('Do you want delete pair of words?')) {
        $.ajax('/dictionary/delete/' + pairId, {
            type: 'DELETE',
            dataType: 'text',
            error: function () {
                alert('Some error and word not deleted :(')
            },
            success: function () {
                document.location.reload();
            }
        })
    }
}