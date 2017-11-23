(function (name, context, definition) {
	if (typeof define === 'function' && define.amd) {
		define(definition);
	}
	else if (typeof module !== 'undefined' && module.exports) {
		module.exports = definition();
	}
	else {
		context[name] = definition();
	}
})('ToggleMenu', this, function() {

	return function(element) {

		element.onclick = function() {

			if (document.body.className.indexOf('nav-open') > -1) {
				document.body.className = document.body.className.replace(/nav\-open/g, '');
			}
			else {
				document.body.className+= ' nav-open ';
			}
			return false;
		};

	};

});
