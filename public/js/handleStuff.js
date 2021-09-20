function resetCheckboxes() {
    let checkboxes = $('.myCheckboxes');
    for (let i = 0; i < checkboxes.length; ++i) {
        checkboxes[i].checked = false;
        checkboxes[i].labels[0].classList.toggle('active', false);
    }
}

function disableSelectedWords() {
    let checkboxes = $('.myCheckboxes');
    let texts = $('.myText');
    if (checkboxes.length !== texts.length) {
        alert('Error: length of checkboxes not equal length of texts');
        return;
    }
    for (let i = 0; i < checkboxes.length; ++i) {
        let labelClasses = checkboxes[i].labels[0].classList;
        if (labelClasses.contains('active')) {
            // Disable checkbox
            checkboxes[i].checked = false;
            labelClasses.remove('active');
            labelClasses.add('disabled');
            // Disable text
            texts[i].classList.toggle('font-weight-bold', false);
            texts[i].classList.add('bg-light', 'text-info', 'veryLightText');
            // If first checkbox in group
            if (checkboxes[i].classList.contains('form_learned_words')) {
                ++i;
                // Disable next checkbox
                checkboxes[i].checked = false;
                checkboxes[i].labels[0].classList.toggle('active', false);
                checkboxes[i].labels[0].classList.add('disabled');
                // Disable next text
                texts[i].classList.add('bg-light', 'text-info', 'veryLightText');
            }
            // If second checkbox in group
            if (checkboxes[i].classList.contains('form_untranslatable_words')) {
                // Disable prev checkbox
                checkboxes[i-1].labels[0].classList.add('disabled');
                // Disable prev text
                texts[i-1].classList.toggle('font-weight-bold', false);
                texts[i-1].classList.add('bg-light', 'text-info', 'veryLightText');
            }
        }

    }
}



function getWordsFromCheckboxes() {
    let checkboxes = document.getElementsByClassName('form_learned_words');

    let words = [];
    for (let i = 0; i < checkboxes.length; ++i) {
        words.push(checkboxes[i].name);
    }

    return words;
}

function getWordsFromContext(idElement) {
    let elem = document.getElementById(idElement);
    let wordsInContextHTML = elem.getElementsByClassName('wordsInContext');

    let wordsInContext = [];
    for (let i = 0; i < wordsInContextHTML.length; ++i) {
        wordsInContext.push(wordsInContextHTML[i].innerText);
    }

    return wordsInContext;
}

function putInModalWords() {
    let modalBody = document.getElementById('listOfWordsInModal');
    let words = getWordsFromCheckboxes();
    modalBody.innerHTML = '';

    for (let i = 0; i < words.length; ++i) {
        modalBody.innerHTML += (words[i]+'<br>');
    }
}

function putInModalWordsFormContext() {
    let modalBody = document.getElementById('listOfWordsInModal');
    let wordsInContext = getWordsFromContext('content');
    modalBody.innerHTML = '';

    for (let i = 0; i < wordsInContext.length; ++i) {
        modalBody.innerHTML += (wordsInContext[i]+'<br>');
    }
}

function copyWordsInContextFrom(id) {
    let input = document.getElementById(id);
    let sentencesHTML = input.getElementsByClassName('sentences');
    // let wordsInContext = getWordsFromContext(id);

    let div = document.createElement('div');
    div.id = 'temporaryStorage';
    for (let i = 0; i < sentencesHTML.length; i++) {
        let wordsInContextHTML = sentencesHTML[i].getElementsByClassName('wordsInContext');
        let row = '';
        for (let j = 0; j < wordsInContextHTML.length; j++) {
            if (wordsInContextHTML[j].innerHTML !== '') {
                row += (wordsInContextHTML[j].innerHTML + ' ');
            }
        }
        div.innerHTML += (row + '<br>');
    }
    input.appendChild(div);
    copyToClipboard('temporaryStorage');
    input.removeChild(div);
}

function sort() {
    let outputButtons = document.getElementById('columnsButtons');
    let outputWords = document.getElementById('columnsWords');
    let text = document.getElementById('words').value;
    let columnsCount = document.getElementById('columnsCount').value;
    let rowsCount = document.getElementById('rowsCount').value;
    let words = text.split('\n');

    let table = [];
    for (let i = 0; i < columnsCount; i++) {
        table[i] = '';
    }
    for (let i = 0; i < words.length; i += rowsCount * columnsCount) {
        for (let g = 0; g < columnsCount; g++) {
            for (let j = 0; j < rowsCount; ++j)
            {
                let key = j + i + (g * rowsCount)
                if (typeof words[key] !== 'undefined') {
                    table[g] += (words[key] + '<br>');
                }
            }
        }
    }
    for (let i = 0; i < columnsCount; i++) {
        table[i] = table[i].substring(0, table[i].length - 4);
    }
    let outputButtonsHTML = '';
    let outputWordsHTML = '';
    for (let i = 0; i < columnsCount; i++) {
        let div = '<div class="col-3"><b>' + i + ':</b><p id="column' + i + '">' + table[i] + '</p></div>';
        let btn = '<div class="col-3"><b>' + i + ': </b><button type="button" onclick="copyToClipboard(' + "'column" + i + "'" + ')" class="btn btn-primary my-3">Copy</button></div>';
        outputButtonsHTML += btn;
        outputWordsHTML += div;
    }
    outputButtons.innerHTML = outputButtonsHTML;
    outputWords.innerHTML = outputWordsHTML;
}