(function()
{
    var buttons = document.querySelectorAll('a');

    for (let i = 0; i != buttons.length; ++i)
    {
        buttons[i].addEventListener('click',
        function()
        {
            var xhr = new XMLHttpRequest();
            xhr.open('post', 'like.php');

            var formData = new FormData();
            formData.append('fruit', buttons[i].getAttribute('data-id'));

            xhr.send(formData);
        });
    }
})();