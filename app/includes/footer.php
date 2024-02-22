<script>
    function loadPage(url) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    var response = xhr.responseText;
                    var tempDiv = document.createElement('div');
                    tempDiv.innerHTML = response;

                    var scripts = tempDiv.getElementsByTagName('script');
                    for (var i = 0; i < scripts.length; i++) {
                        eval(scripts[i].innerText);
                    }

                    document.documentElement.innerHTML = tempDiv.innerHTML;

                    history.pushState({}, null, '<?php echo url_server; ?>' + url);
                } else {
                    console.error('Error loading page:' + xhr.status);
                }
            }
        };
        xhr.open('GET', '?url=' + url, true);
        xhr.send();
    }
</script>