function confirmRedirect(message, url) {
    if (confirm(message)) {
        document.location.href = url;
    }
}

function copyToClipboard(elementId) {

    let element = document.getElementById(elementId);
    let range = new Range();
    range.selectNode(element);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);

    document.execCommand('copy');

    window.getSelection().removeAllRanges();
}