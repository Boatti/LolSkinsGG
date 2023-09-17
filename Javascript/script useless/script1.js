		

(function()
{
		var elements = document.querySelectorAll('.IconParameters');
   	var textfield = document.querySelector('#SearchBar input');
    
    textfield.addEventListener('input',
    function()
    {
    		for (let i = 0; i != elements.length; ++i)
        {
        		let fruitName = elements[i].id;
            let searchValue = textfield.value.toLowerCase();
            
            if (fruitName.indexOf(searchValue) > -1)
            		elements[i].style.display = '';
            else
            		elements[i].style.display = 'none';
        }
    });
})();
