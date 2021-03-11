function confirmRedirect(message, url) {
    if (confirm(message)) {
        document.location.href = url;
    }
}