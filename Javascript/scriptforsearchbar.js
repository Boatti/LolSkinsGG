		
(function()
{
	var elements = document.querySelectorAll('.IconParameters');
   	var textfield = document.querySelector('#SearchBar input');
    
    
    textfield.addEventListener('input',
    function()
    {
    		for (let i = 0; i != elements.length; ++i)
        {
        		let name = elements[i].getAttribute('name').toLowerCase();
                let skins = elements[i].getAttribute('skins').toLowerCase();
            let searchValue = textfield.value.toLowerCase();
            
            if (name.indexOf(searchValue) > -1 || skins.indexOf(searchValue) > -1)
            		elements[i].style.display = '';
            else
            		elements[i].style.display = 'none';

    
        }
    });
})();
